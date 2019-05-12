$(function() {

    /**
     * handle click event on a like button of a post
     */
    $('.like-icon').click(function(e) {
        toggleLikeIcon(this)
    })

    /**
     * toggle icon and change likes number
     * @param elem
     */
    function toggleLikeIcon(elem) {
        if($(elem).data('liked')) {
            subLike(elem)
        }
        else {
            addLike(elem)
        }
    }

    /**
     * sub a like from post
     * @param elem
     */
    function subLike(elem) {
        $(elem).data('liked', false)
        $(elem).prop('src', '/img/svg/like-white.svg')
        let span = $(elem).next()
        span.html(parseInt(span.html()) - 1)
    }

    /**
     * add a like on post
     * @param elem
     */
    function addLike(elem) {
        $(elem).data('liked', true);
        $(elem).prop('src', '/img/svg/like-red.svg');
        let span = $(elem).next();
        span.html(parseInt(span.html()) + 1);
    }

    /**
     * handle click event on img selector
     */
    $('#img-selector').change(function(e) {
        if(e.target.files.length !== 0) {
            let src = URL.createObjectURL(e.target.files[0]);
            selectImgToPost(src);
        }
    })

    /**
     * select the img to post
     * @param src
     */
    function selectImgToPost(src) {
        $('#img-to-post').prop('src', src);
        togglePublisher(src);
        toggleCanceler(src);
    }

    /**
     * toggle "publish" button status
     * @param src
     */
    function togglePublisher(src) {
        if(!src) {
            $('#img-publisher').prop('disabled', true);
        }
        else {
            $('#img-publisher').prop('disabled', false);
        }
    }

    /**
     * toggle img cancel button status
     * @param src
     */
    function toggleCanceler(src) {
        if(!src) {
            $('#img-canceler').parent().removeClass('removable');
        }
        else {
            $('#img-canceler').parent().addClass('removable');
        }
    }

    /**
     * handle click event on img canceler
     */
    $('#img-canceler').click(function(e) {
        cancelImgToPost();
    })

    /**
     * cancel the img to post
     */
    function cancelImgToPost() {
        $('#img-to-post').prop('src', '');
        togglePublisher('');
        toggleCanceler('');
        $('#img-selector').val('');
    }

    /**
     * handle click event on profile picture selector
     */
    $('#profile-pic-selector').change(function(e) {
        if(e.target.files.length != 0) {
            let src = URL.createObjectURL(e.target.files[0])
            selectProfilePic(src);
        }
    })

    /**
     * select profile picture
     * @param src
     */
    function selectProfilePic(src) {
        $('#profile-pic').prop('src', src);
    }

    /**
     * handle hidden event on profile editor modal
     */
    $('#profile-editor').on('hidden.bs.modal', function(e) {
        initProfileEditor();
    })

    /**
     * initialiser les champs de profile editor
     */
    function initProfileEditor() {
        $('#profile-pic').prop('src', $('#profile-pic').data('default'));
        $('#profile-editor [name="nom"]').val($('#profile-editor [name="nom"]').data('default'));
        $('#profile-editor [name="prenom"]').val($('#profile-editor [name="prenom"]').data('default'));
        $('#profile-editor [name="description"]').val($('#profile-editor [name="description"]').data('default'));
        //$('#profile-editor [name="sexe"]')[$('#profile-editor [name="sexe"]').data('default')].checked = true;
        $('#profile-editor [name="date"]').val($('#profile-editor [name="date"]').data('default'));
        $('#profile-editor [name="origin_city"]').val($('#profile-editor [name="origin_city"]').data('default'));
        $('#profile-editor [name="current_city"]').val($('#profile-editor [name="current_city"]').data('default'));
    }

    /**
     * handle hidden event on comments modal
     */
    $('#comments').on('hidden.bs.modal', function(e) {
        $('#comments [name="comment"]').val('');
    })

    /**
     * handle hidden event on preferences modals
     */
    $('#preferences').on('hidden.bs.modal', function(e) {
        initPreferences();
    })

    /**
     * initialiser les champs de preferences
     */
    function initPreferences() {
        //$('#preferences [name="sexe"]')[$('#preferences [name="sexe"]').data('default')].checked = true;
        $('#preferences [name="ageMin"]').val($('#preferences [name="ageMin"]').data('default'));
        $('#preferences [name="ageMax"]').val($('#preferences [name="ageMax"]').data('default'));
        $('#preferences [name="place"]').val($('#preferences [name="place"]').data('default'));
    }

})