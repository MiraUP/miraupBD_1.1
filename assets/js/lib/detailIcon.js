function btnActionIcon() {
  $('.btn-action-icon').on('click', function () {
    var $this = $(this),
      $dataURLsite = $this.data('url'),
      $dataID = $this.data('id'),
      $dataTag = $this.data('tag'),
      $dataIMG = $this.data('img'),
      $dataName = $this.data('name'),
      $dataSVG = $this.data('svg'),
      $dataAI = $this.data('ai'),
      $dataEPS = $this.data('eps'),
      $dataJSON = $this.data('json'),
      $dataPNG = $this.data('png'),
      $dataJPG = $this.data('jpg'),
      $dataGIF = $this.data('gif'),
      $dataMP4 = $this.data('mp4'),
      $dataAE = $this.data('ae'),
      $dataFONT = $this.data('font');

    var $sidebar = $('.sidebar-right'),
      $nameIcon = $sidebar.find('.name-icon'),
      $previewIcon = $sidebar.find('.preview-icon'),
      $btnDownIcon = $sidebar.find('.type-file .download-btn'),
      $IconLigthMode = $('.icon-light-mode'),
      $btnIconLigth = $IconLigthMode.find('input[name="icon-light-mode"]'),
      $ContentItensIcon = $('.content-items-icon'),
      $EditAttachment = $('.edit-attachment');
    $tagsAttachment = $('.tag-file').find('.tag-btn');

    $nameIcon.html($dataName);
    $previewIcon.html('<div></div>');
    $btnDownIcon.html('');
    $ContentItensIcon.addClass('open-sidebar');
    $sidebar.addClass('open');

    $.get(
      $dataIMG,
      function (data) {
        var $svg = $(data).find('svg'),
          $svg = $svg.removeAttr('xmlns'),
          $svg = $svg.removeAttr('xmlns:xlink'),
          $svg = $svg.removeAttr('id');
        $previewIcon
          .find('div')
          .html(
            '<p><lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="loop" colors="primary:#f0f1f5,secondary:#f0f1f5" style="width:50px;height:50px"> </lord-icon> Carregando...</p>',
          )
          .replaceWith($svg);
      },
      'xml',
    );

    $.get(
      $('.svg-inline').attr('src'),
      function (data) {
        var $svg = $(data).find('svg'),
          $svg = $svg.removeAttr('xmlns'),
          $svg = $svg.removeAttr('xmlns:xlink'),
          $svg = $svg.removeAttr('id');
        $(this).replaceWith($svg);
      },
      'xml',
    );

    if ($dataSVG !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataSVG +
          '" class="col btn btn-success btn-sm text-white">SVG</a>'
        );
      });
    } else {
    }

    if ($dataAI !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataAI +
          '" class="col btn btn-success btn-sm text-white">Ai</a>'
        );
      });
    } else {
    }

    if ($dataEPS !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataEPS +
          '" class="col btn btn-success btn-sm text-white">EPS</a>'
        );
      });
    } else {
    }

    if ($dataJSON !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataJSON +
          '" class="col btn btn-success btn-sm text-white">JSON</a>'
        );
      });
    } else {
    }

    if ($dataPNG !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataPNG +
          '" class="col btn btn-success btn-sm text-white">PNG</a>'
        );
      });
    } else {
    }

    if ($dataJPG !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataJPG +
          '" class="col btn btn-success btn-sm text-white">JPG</a>'
        );
      });
    } else {
    }

    if ($dataGIF !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataGIF +
          '" class="col btn btn-success btn-sm text-white">GIF</a>'
        );
      });
    } else {
    }

    if ($dataMP4 !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataMP4 +
          '" class="col btn btn-success btn-sm text-white">MP4</a>'
        );
      });
    } else {
    }

    if ($dataAE !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataAE +
          '" class="col btn btn-success btn-sm text-white">After Effects</a>'
        );
      });
    } else {
    }

    if ($dataFONT !== '') {
      $btnDownIcon.append(function () {
        return (
          '<a href="' +
          $dataFONT +
          '" class="col btn btn-success btn-sm text-white">Font Web</a>'
        );
      });
    } else {
    }

    if ($dataID !== '') {
      $EditAttachment.attr('href', $dataURLsite + '/wp-admin/upload.php?item=' + $dataID);
    } else {
    }

    if ($dataTag !== '') {
      var tags = $dataTag.split(', ');
      var htm;

      for (var i = 0; i < tags.length; i++) {
        htm +=
          '<span class="col-auto btn btn-primary btn-sm text-white">' +
          tags[i] +
          '</span>';
        console.log(i);
      }

      $tagsAttachment.html(htm);
    } else {
    }

    if ($btnIconLigth.is(':checked')) {
      $IconLigthMode.addClass('icon-light');
    } else {
      $IconLigthMode.removeClass('icon-light');
    }

    //Copy HTML icon
    navigator.clipboard.writeText(
      '<i class="icon icon-' + $dataName + '"></i>',
    );

    const toastLiveCopy = document.getElementById('liveToastCopy');
    $('.toast-body').html(
      'HTML do icone "<strong>' + $dataName + '</strong>" copiado.',
    );

    const toast = new bootstrap.Toast(toastLiveCopy);
    toast.show();
  });

  $('.icon-light-mode').on('change', function () {
    var input = $(this).find('input[name="icon-light-mode"]');

    if (input.is(':checked')) {
      $('.preview-icon').addClass('icon-light');
    } else {
      $('.preview-icon').removeClass('icon-light');
    }
  });
}

$(document).ready(function () {
  btnActionIcon();
});
