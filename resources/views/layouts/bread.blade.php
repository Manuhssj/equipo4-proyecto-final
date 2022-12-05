
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ Request::segment(1) }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <!-- <li class="breadcrumb-item"><a href="">Inicio</a>  ></li> -->
                        <?php $link = "" ?>
                        @for($i = 1; $i <= count(Request::segments()); $i++)
                            @if($i < count(Request::segments()) & $i > 0)
                            <?php $link .= "/" . Request::segment($i); ?>
                            <li class="breadcrumb-item" > <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> > </li>
                            @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                            @endif
                        @endfor
                    </ol>
                </div>

            </div>
        </div>
    </div>