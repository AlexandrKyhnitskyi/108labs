var loaderImage = new Image();
loaderImage.src = assetsUrl + '/img/loader.gif';
function modal(options) {
    options = options !== null && typeof options === 'object' ? options : {};

    var $modal = $('<div class="modal fade modal-block" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"></div></div></div>');
    var $dialog = $modal.find('.modal-dialog');
    var $content = $modal.find('.modal-content');

    var $loader = $('<img src="" alt="Загрузка...">');
    $loader
        .attr('src', loaderImage.src)
        .css({
            display: 'block',
            margin: '50px auto'
        });
    $content.append($loader);

    $('body').append($modal);

    if (options.large) {
        $dialog.addClass('modal-lg');
    }

    if (options.html) {
        $content.html(options.html);
        options.ready && options.ready($modal);
    } else if (options.url) {
        $content.load(options.url, function () {
            options.ready && options.ready($modal);
        });
    }

    $modal.on('hidden.bs.modal', function () {
        $modal.remove();
    });

    $modal.modal('show');
}

function notification(message) {
    modal({
        html: '<div class="h1 text-center">' + message + '</div>',
        ready: function ($notificationModal) {
            setTimeout(function () {
                $notificationModal.modal('hide');
            }, 1500)
        }
    });
}
$('#login-form').on('submit', function(e){
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    var data = form.serialize();
     $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function(){
            notification('Даные получены');
            
        },
        error: function(){
            alert('Error!');
        }
    });
});
$('.project').on('click', function(){
    $(this).toggleClass('toggle_class');
    var tags = [];
    $('.project.toggle_class').each(function () {
        tags.push($(this).attr('data-tag'));
    });
    var data = {
        tags: tags
    };
    console.log(data);
    var name = $('meta[name="csrf-param"]').attr('content');
    data[name] = $('meta[name="csrf-token"]').attr('content');
    console.log(data);
    $.ajax({
        url: '/portfolio/index',
        type: 'POST',
        data: data,
        success: function(projectsHtml){
            console.log(projectsHtml);
$('#projects').replaceWith(projectsHtml)
        },
        error: function(){
            alert('Error!');
        }
    });
});