<?php
// src/Controller/StaffController.php

namespace AppBundle\Controller;


use AppBundle\Entity\calendar;
use AppBundle\Entity\StaffCalendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\staff;


/**
 * @Route("/staff")
 */
class StaffController extends AbstractController
{
    /**
     * @Route("/{page}", name="oc_stuff_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
     */


    /**
     * @Route("/view/{id}", name="oc_staff_view", requirements={"id" = "\d+"})
     */
    public function view($id, $authenticationUtils)
    {
        $errors = $authenticationUtils->getLastAuthenticationError();


        // Ici, on récupérera la personne correspondante à l'id $id
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:staff');
        $staff = $repository->find($id);
        $calendar = $staff->getCalendar();

        return $this->render('SOSDiderot/profil.html.twig', [
            'id' => $id, 'staff' => $staff, 'calendar' => $calendar
        ]);
    }


    /**
     * @Route("/edit/{id}", name="oc_staff_edit", requirements={"id" = "\d+"})
     */
    public function edit($id, Request $request)
    {
        // Ici, on récupérera la personne correspondante à $id

        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST')) {
            $this->addFlash('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('oc_staff_view', ['id' => 5]);
        }

        return $this->render('staff/edit.html.twig');
    }

    /**
     * @Route("/delete/{id}", name="oc_staff_delete", requirements={"id" = "\d+"})
     */
    public function delete($id)
    {
        // Ici, on récupérera la personne correspondant à $id

        // Ici, on gérera la suppression de la personne en question

        return $this->render('staff/delete.html.twig');
    }


    /**
     * @Route("/loginPro", name="loginPro")
     */
    public function SOSLoginPro(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $errors = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/staff/connexionPro.html.twig', array(
            'errors' => $errors,
            'last_username' => $lastUsername,
        ));
    }


    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, \Swift_Mailer $mailer, UserPasswordEncoderInterface $encoder)
    {
        $user = new staff();
        if ($request->isMethod('post')) {

            $data = $request->request->all();
            $user->setName($data['nom']);
            $user->setFirstName($data['prenom']);
            $user->setEmail($data['email']);
            $encoded = $encoder->encodePassword($user, $data['password']);
            $user->setPassword($encoded);
            $user->setUfr($data['ufr']);
            $user->setService($data['service']);
            $user->setJob($data['job']);
            $user->setUniversity($data['university']);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();


            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('send@example.com')
                ->setTo($data['email']);
            $mailer->send($message);


            $this->addFlash(
                'success',
                'Votre inscription à été pris en compte'
            );
            return $this->redirectToRoute('loginPro');

        }

        return $this->render('SOSDiderot/staff/inscriptionPro.html.twig');
    }

    /**
     * @Route("/accueilStaf", name="accueilStaf")
     */
    public function SOSPAccueil(Request $request)
    {
        $session = $request->getSession();
        $session->set('headerName', 'header-authenticated.html.twig');
        $user = $this->getUser();
        $session->set('ufr', $user->getUfr());
        $session->set('service', $user->getFirstName());
        $session->set('job', $user->getJob());
        $session->set('type', "staff");

        $staff = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $scRepo = $em->getRepository('AppBundle:StaffCalendar');

        $calendars = $scRepo->findBy(['staff' => $staff]);

        if ($request->isMethod('POST')) {
            foreach ($calendars as $calendar) {
                $em->remove($calendar);
            }
            $em->flush();

            $calendars = [];
            $hour = 0;
            foreach ($request->request->get('disp') as $row) {
                $day = 0;
                foreach ($row as $isHere) {
                    $calendar = new calendar();
                    $calendar->setDay($day);
                    $calendar->setHour($hour);
                    $calendar->setIsHere($isHere === "true" ? true : false);
                    $em->persist($calendar);

                    $staffCalendar = new StaffCalendar();
                    $staffCalendar->setCalendar($calendar);
                    $staffCalendar->setStaff($staff);
                    $em->persist($staffCalendar);

                    $calendars[] = $staffCalendar;

                    $day++;
                }

                $hour++;
            }
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('SOSDiderot/staff/accueil.html.twig', array('calendars' => $calendars));
    }

    /**
     * @Route("/calendar/{id}", name="calendarStaf")
     */
    public function SOSPCalendar($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $scRepo = $em->getRepository('AppBundle:StaffCalendar');
        $sRepo = $em->getRepository('AppBundle:staff');

        $staff = $sRepo->find($id);
        $calendars = $scRepo->findBy(['staff' => $staff]);

        // replace this example code with whatever you need
        return $this->render('SOSDiderot/staff/calendar.html.twig', array('calendars' => $calendars, 'staff' => $staff));
    }

    /**
     * @Route("/logouts", name="logouts")
     */
    public function SOSLogout(Request $request)
    {
        // replace this example code with whatever you need
        $session = $request->getSession();
        $session->set('ufr', "");
        $session->set('service', "");
        $session->set('job', "");
        $session->set('type', "none");
        $session->set('headerName', 'header-anonym.html.twig');
        return $this->render('SOSDiderot/SOSDiderot.html.twig');
    }

    /**
     * @Route("/profile-updatee", name="profile-updatee")
     */
    public function SOSProfileUpdate(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->request->all();
            $user = $this->getUser();
            $user->setName($data['nom']);
            $user->setFirstName($data['prenom']);
            $user->setUfr($data['ufr']);
            $user->setUniversity($data['university']);
            $user->setService($data['service']);
            $user->setJob($data['job']);


            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $em->refresh($user);
            $session = $request->getSession();
            $session->set('nom', $user->getName());
            $session->set('prenom', $user->getFirstName());
            $session->set('university', $user->getUniversity());
            $session->set('job', $user->getJob());
            $session->set('service', $user->getService());
            $session->set('ufr', $user->getUfr());
            return $this->redirectToRoute('profiles');
        }

        return $this->render('SOSDiderot/satff/profilPro.html.twig');
    }


    /**
     * @Route("/profiles", name="profiles")
     */
    public function SOSProfile(Request $request)
    {
        $session = $request->getSession();
        $user = $this->getUser();
        dump($user);
        return $this->render('SOSDiderot/staff/profilePro.html.twig', ['user' => $user]);;
    }

    /**
     * @Route("/notificationPro", name="notificationPro")
     */
    public function SOSNotification(Request $request)
    {
        return $this->render('SOSDiderot/staff/notifiactionPro.html.twig');
    }

    /**
     * @Route("/rendez_vousPro", name="rendez_vousPro")
     */
    public function SOSRendezVous(Request $request)
    {
        return $this->render('SOSDiderot/rendez_vous.html.twig');
    }

    /**
     * @Route("/settingsPro", name="settingsPro")
     */
    public function SOSSettings(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/staff/settingsPro.html.twig');
    }


    /**
     * @Route("/email-updatee", name="email-updatee")
     */
    public function SOSUpdateMail(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->request->all();
            $user = $this->getUser();
            $user->setEmail($data['email']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $em->refresh($user);
            $this->addFlash(
                'success',
                'Votre email a été mise à jour'
            );
            return $this->redirectToRoute('settings');
        }
        return $this->render('SOSDiderot/staff/email-updatePro.html.twig');
    }


    /**
     * @Route("/passwordUpdatee", name="passwordUpdatee")
     */
    public function SOSPasswordUpdate(Request $request, UserPasswordEncoderInterface $encoder)
    {

        if ($request->isMethod('post')) {

            $data = $request->request->all();
            $user = $this->getUser();
            $encoded = $encoder->encodePassword($user, $data['pswNouv']);
            $encodedActuelle = $encoder->encodePassword($user, $data['pswActuelle']);
            if ($data['pswActuelle'] != $user->getPassword()) {
                $this->addFlash(
                    'warning',
                    'Votre mot de passe actuelle est incorrect'
                );
                return $this->render('SOSDiderot/staff/passwordUpdatePro.html.twig');
            }
            $user->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $em->refresh($user);
            return $this->redirectToRoute('settings');
        }


        return $this->render('SOSDiderot/staff/passwordUpdatePro.html.twig');
    }
}
