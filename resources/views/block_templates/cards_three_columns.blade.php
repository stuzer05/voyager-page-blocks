<!-- THREE CARD BLOCK -->
<div class="page-block @if (in_array($blockData->spaces, [0, 2])) page-block-space-bottom @endif @if (in_array($blockData->spaces, [1, 2])) page-block-space-top @endif">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-4" data-scrollreveal>
                <div class="card">
                    @if (!empty($blockData->image_1))
                        @if (!empty($blockData->link_1))<a href="{!! $blockData->link_1 or '' !!}">@endif
                        <img src="{!! $blockData->image_1 or '' !!}">
                        @if (!empty($blockData->link_1))</a>@endif
                    @endif

                    <div class="card-section">
                        @if (!empty($blockData->title_1))
                            <h4>{!! $blockData->title_1 or '' !!}</h4>
                        @endif

                        @if (!empty($blockData->content_1))
                            <p>{!! $blockData->content_1 or '' !!}</p>
                        @endif

                        @if (!empty($blockData->link_1))
                            <a href="{!! $blockData->link_1 or '' !!}" class="button">{!! $blockData->button_text_1 or 'Learn More' !!}</a>
                        @endif
                    </div> <!-- /.card-section -->
                </div> <!-- /.card -->
            </div> <!-- /.cell -->

            <div class="cell small-12 medium-4" data-scrollreveal>
                <div class="card">
                    @if (!empty($blockData->image_2))
                        @if (!empty($blockData->link_2))<a href="{!! $blockData->link_2 or '' !!}">@endif
                        <img src="{!! $blockData->image_2 or '' !!}">
                        @if (!empty($blockData->link_2))</a>@endif
                    @endif

                    <div class="card-section">
                        @if (!empty($blockData->title_2))
                            <h4>{!! $blockData->title_2 or '' !!}</h4>
                        @endif

                        @if (!empty($blockData->content_2))
                            <p>{!! $blockData->content_2 or '' !!}</p>
                        @endif

                        @if (!empty($blockData->link_2))
                            <a href="{!! $blockData->link_2 or '' !!}" class="button">{!! $blockData->button_text_2 or 'Learn More' !!}</a>
                        @endif
                    </div> <!-- /.card-section -->
                </div> <!-- /.card -->
            </div> <!-- /.cell -->

            <div class="cell small-12 medium-4" data-scrollreveal>
                <div class="card">
                    @if (!empty($blockData->image_3))
                        @if (!empty($blockData->link_3))<a href="{!! $blockData->link_3 or '' !!}">@endif
                        <img src="{!! $blockData->image_3 or '' !!}">
                        @if (!empty($blockData->link_3))</a>@endif
                    @endif

                    <div class="card-section">
                        @if (!empty($blockData->title_3))
                            <h4>{!! $blockData->title_3 or '' !!}</h4>
                        @endif

                        @if (!empty($blockData->content_3))
                            <p>{!! $blockData->content_3 or '' !!}</p>
                        @endif

                        @if (!empty($blockData->link_3))
                            <a href="{!! $blockData->link_3 or '' !!}" class="button">{!! $blockData->button_text_3 or 'Learn More' !!}</a>
                        @endif
                    </div> <!-- /.card-section -->
                </div> <!-- /.card -->
            </div> <!-- /.cell -->
        </div> <!-- /.grid -->
    </div> <!-- /.container -->
</div> <!-- /.page-block -->
<!-- /THREE CARD BLOCK -->