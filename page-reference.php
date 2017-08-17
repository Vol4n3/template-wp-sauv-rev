<?php
/*
 * Template Name: reference
 *
 */
get_header(); ?>
<div class="reference">
    <div class="modal fade" id="pdf-view" tabindex="-1" role="dialog" aria-labelledby="pdf-view">
        <div class="sauvant-container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Nos réferences dans ce pays (<span id="country-name"></span>)</h4>

                </div>
                <div class="modal-body">
                    <div class="box wrap relative between pdf-view-list">
                        <ul id="letter-list">

                        </ul>
                        <div id="pdf-view-container" class="relative">
                            <div id="canvasloader-container"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="sauvant-container reference">
        <section class="header-image">
            <img src="<?php the_field('image'); ?>">
            <div class="header-caption">

                <div class="blue-heading inline-box y-center <?php if (get_field('right-orientation')) {
                    echo('right');
                } ?>">
                    <div class="caption-text">
                        <?php the_field('text-caption'); ?>
                    </div>

                </div>
            </div>
        </section>
        <section class="relative main-section">
            <div class="box center">
                <div class="circle box center y-center">
                    <div>
                        <img width="40px" src="<?php the_field('picto_circle'); ?>">
                    </div>

                </div>
            </div>
            <article class="page-content">
                <h2 class="text-uppercase underline"><?php the_field('title'); ?></h2>
                <?php the_field('content'); ?>
                <div id="container" style="width:100%; height:500px;"></div>
            </article>
            <?php include('template/formContact.php'); ?>
        </section>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/highmaps.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/world-highres3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pdf.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/heartcode-canvasloader-min.js"></script>
<script>
    var showPDF = null;
    jQuery(function () {
        var cl = new CanvasLoader('canvasloader-container');
        cl.setColor('#1a9bd7'); // default is '#000000'
        cl.setShape('spiral'); // default is 'oval'
        cl.setDiameter(93); // default is 40
        cl.setDensity(18); // default is 40
        cl.setRange(0.8); // default is 1.3
        cl.setSpeed(1); // default is 2
        cl.setFPS(33); // default is 24
        // This bit is only for positioning - not necessary
        var loaderObj = document.getElementById("canvasLoader");
        loaderObj.style.position = "absolute";
        loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
        loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
        var $ = jQuery;
        var currentPage;
        var pdfContainer = document.getElementById('pdf-view-container');
        var pdfCanvas = document.createElement('canvas');

        pdfContainer.appendChild(pdfCanvas);
        var pdfContext = pdfCanvas.getContext('2d');

        function resize() {
            pdfCanvas.width = 0;
            pdfCanvas.height = 0;
            if (currentPage) {
                pdfCanvas.width = currentPage.renderContext.viewport.width;
                pdfCanvas.height = currentPage.renderContext.viewport.height;
                currentPage.page.render(currentPage.renderContext);
            }
        }

        window.addEventListener('resize', resize);
        PDFJS.workerSrc = '<?php echo get_template_directory_uri(); ?>/js/pdf.worker.js';
        showPDF = function (url) {
            cl.show();
            PDFJS.getDocument(url).then(function (pdf) {
                pdf.getPage(1).then(function (page) {

                    var scale = 1;
                    var viewport = page.getViewport(scale);
                    var renderContext = {
                        canvasContext: pdfContext,
                        viewport: viewport
                    };
                    currentPage = {page: page, renderContext: renderContext};
                    resize();
                    page.render(renderContext);
                    cl.hide();
                });
            })
        };
        var data = [
            <?php
            if (have_rows('clients')):
            while (have_rows('clients')) : the_row();
            ?>
            {
                title: '<?php the_sub_field('titre'); ?>',
                code: '<?php the_sub_field('lieu'); ?>',
                url: '<?php the_sub_field('fichier'); ?>',
            },
            <?php
            endwhile;
            else :
            endif;

            ?>
        ];
        var seriesObj = {};
        var series = [];
        for (var d in data) {
            var code = data[d].code.toLowerCase();
            if (seriesObj[code]) {
                seriesObj[code]++;
            } else {
                seriesObj[code] = 1;
            }
        }
        for (var s in seriesObj) {
            series.push([s, seriesObj[s]]);
        }
        function pointClick() {
            var countryCode = this['hc-key'];
            var countryName = this['name'];
            $('#letter-list').empty();
            $('#country-name').text(countryName);
            for (var d in data) {
                if (data[d].code.toLowerCase() === countryCode) {
                    addLetterList(data[d]);
                }
            }
            $('#pdf-view').modal('show');
            currentPage = undefined;
            resize();

        }

        function addLetterList(d) {
            var $list = $('<li></li>');
            var $letterList = $('#letter-list');

            $list.attr('onclick', 'showPDF("' + d.url + '")');
            $list.text(d.title);
            $letterList.append($list);
        }

        $('#container').highcharts('Map', {
            title: {
                text: null
            },
            mapNavigation: {
                enabled: true
            },
            chart: {
                map: 'custom/world-highres3'
            },
            legend: {
                enabled: false
            },

            series: [{
                data: series,
                point: {
                    events: {
                        click: pointClick
                    }
                },
                color: "#0574ab",
                borderColor: "#ffffff",
                nullColor: "#1a9ad7",
                borderWidth: 1,
                name: 'Témoignages',
                states: {
                    hover: {
                        color: '#fbba06'
                    }
                },
                tooltip: {
                    valueSuffix: 'Lettre(s)'
                }
            }]
        })
    });
</script>

<?php get_footer(); ?>
