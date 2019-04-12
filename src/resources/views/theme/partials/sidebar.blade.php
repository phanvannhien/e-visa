<?php
$sidebar = \App\Models\Block::where('block_code', 'support' )->first();
$feature = \App\Models\Block::where('block_code', 'sidebar_feature' )->first();
$sidebar_payment = \App\Models\Block::where('block_code', 'sidebar_payment' )->first();

?>

<div class="card mb-3">
    <div class="card-header">
        NEED HELP 24/7
    </div>
    <div class="card-body">

        @if( $sidebar )
            {!! $sidebar->block_content !!}
        @endif
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        {{ $feature->block_title }}
    </div>
    <div class="card-body">
        @if( $feature )
            {!! $feature->block_content !!}
        @endif
    </div>
</div>

<div class="card">
    <div class="card-body text-center">
        @if( $sidebar_payment )
            {!! $sidebar_payment->block_content !!}
        @endif
    </div>
</div>