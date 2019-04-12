<?php

namespace App\Utils;

use LaravelLocalization;

class HTMLBuilder{

    public static function renderFlatCheckbox( $data, $name, $selected = array()){

        $html = "";
        foreach($data as $cat) {
            $att = ( in_array($cat->id, $selected )) ? 'checked' : '';
            $html.= '<label><input name=".$name." type="checkbox" class="i-checks" '.$att.' value="'.$cat->id.'">'.$cat->title.'</label>';
        }
        return $html;

    }


    public static function buildElement( $attribute, $current_value = '' ){
        $html = '';
//        if( $attribute->type === 'text' )
//            dd( $attribute->type );
        switch ( $attribute->type ){
            case 'text':

                $html = "
                    <label>{$attribute->admin_name}</label>
                    <input class='form-control' type='text' name='attribute[{$attribute->id}]' value='{$current_value}' />
                ";


                break;

            case 'select':

                $html = "
                    <label>{$attribute->admin_name}</label>
                    <select class='form-control' name='attribute[{$attribute->id}]' value='{$current_value}' >
                         ".$attribute->getOptionSelectHtml()."</select>";

                break;

            case 'boolean':
                $html = "
                    <label for='at-{$attribute->admin_name}'>
                    <input id='at-{$attribute->name}' type='checkbox' class='i-checks' name='attribute[{$attribute->id}]' value='{$current_value}' />
                    {$attribute->label}</label>
                ";
                break;

                
            case 'textarea':

                $html .= "
                    <label>{$attribute->admin_name}</label>
                    <textarea class='form-control editor' type='textarea' name='attribute[{$attribute->id}]' >{$current_value}</textarea>
                ";

                break;

        }
        return $html;
    }

}