<?php
    $configuration = app('Configuration');
    $stores = \App\Models\Store::all();

    $block_footer_about = \App\Models\Block::where('block_code', 'footer_about')->first();
    $block_footer_check_requirement  = \App\Models\Block::where('block_code', 'footer_check_requirement')->first();
    $block_footer_footer_information   = \App\Models\Block::where('block_code', 'footer_information')->first();
    $block_footer_hotline  = \App\Models\Block::where('block_code', 'footer_hotline')->first();
    $block_footer_content = \App\Models\Block::where('block_code', 'footer_content')->first();

?>
<footer>
    <div id="footer-top" class="clearfix">
        <div class="container">
            @if( $primaryNavItems )
                {!! App\Utils\Category::renderMenuHTML( $primaryNavItems, 'footer-menu' ) !!}
            @endif
        </div>
    </div>
    <div id="footer-main" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3 footer-block mb-3 mb-md-0">
                    @if( $block_footer_about )
                        {!! $block_footer_about->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-3 mb-md-0">
                    @if( $block_footer_check_requirement )
                        {!! $block_footer_check_requirement->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-4 mb-md-0">
                    @if( $block_footer_footer_information )
                        {!! $block_footer_footer_information->block_content !!}
                    @endif
                </div>
                <div class="col-md-6 col-lg-3 footer-block mb-4 mb-md-0">
                    @if( $block_footer_hotline )
                        {!! $block_footer_hotline->block_content !!}
                    @endif
                </div>

            </div>
        </div>


    </div>

    <div id="footer-bottom" class="py-5">
        <div class="container">

            @if( $block_footer_content )
            {!! $block_footer_content->block_content !!}
            @endif
        </div>

    </div>

</footer>
