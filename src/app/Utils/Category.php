<?php

namespace App\Utils;

class Category{


    public static function renderAdminHtml( $cats, $edit = 'categories.edit', $delete = 'categories.destroy',$view = 'category.product', $class = 'dd-list-cat'){
        $html = "<ul class=\"dd-list-cat ".$class."\" >";

        foreach($cats as $cat) {
            $view_href = route($view, ['slug' =>$cat->slug, 'id' => $cat->id ]);
            $edit_href = route( $edit,$cat->id);
            $delete_href = route($delete,$cat->id);
            $html.= '<li class="dd-item" data-id="'.$cat->id.'" >
                <div class="dd3-content clearfix">
                    <img width="30" src="'.$cat->getImage().'" alt="">
                    <div class="content-left">
                        <p class="pull-right">
                       
                            <a class="btn btn-sm btn-primary btn-edit" id="'.$cat->id.'" href="'.$edit_href.'" ><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger btn-delete" id="'.$cat->id.'" href="'.$delete_href.'"><i class="fa fa-trash"></i></a>
                        </p>
                        <p id="label_show'.$cat->id.'">'.$cat->category_name.'</p>
                        <a target="_blank" href="'.$view_href.'">'.$view_href.'</a>
                        
                    </div>
                </div>';

            if(  $cat->children ) {
                $html .= self::renderAdminHtml($cat->children, $edit, $delete,$view );
            }
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }



    public static function renderSelect( $cats, $selected = '', $display_title = 'category_name' ){

        $html = "";
        foreach($cats as $cat) {

            $att = ( $cat->id == $selected ) ? 'selected' : '';
            $spe = '';
            for( $i = 1; $i <= $cat->depth; $i++ ){
                $spe .= '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $html.= '<option '.$att.' value="'.$cat->id.'">'.$spe.$cat->$display_title.'</option>';
            if( $cat->children ) {
                $html .= self::renderSelect($cat->children, $selected, $display_title  );
            }
        }
        return $html;

    }


    public static function renderSelectMultiple( $cats, $selected = array() ){

        $html = "";
        foreach($cats as $cat) {
            $att = ( in_array($cat->id, $selected )) ? 'selected' : '';
            $spe = '';
            for( $i = 1; $i <= $cat->depth; $i++ ){
                $spe .= '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $html.= '<option '.$att.' value="'.$cat->id.'">'.$spe.$cat->category_name.'</option>';
            if( $cat->children ) {
                $html .= self::renderSelect($cat->children, $selected );
            }
        }
        return $html;

    }


    public static function renderCheckbox( $cats, $selected = array()){

        $html = "";
        foreach($cats as $cat) {
            $att = '';
            if( count($selected) )
                $att = ( in_array($cat->id, $selected )) ? 'checked' : '';
            $spe = '&nbsp;';
            for( $i = 1; $i <= $cat->depth; $i++ ){
                $spe .= '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $html.= '<p><label for="cat-'.$cat->id.'"><input id="cat-'.$cat->id.'" name="cat_id[]" type="checkbox" class="i-checks" '.$att.' value="'.$cat->id.'">'.$spe.$cat->category_name.'</label></p>';
            if( $cat->children ) {
                $html .= self::renderCheckbox($cat->children, $selected );
            }
        }
        return $html;

    }

    public static function renderMenuTree($cats, $class = 'ui-sortable todo-list '){
        $html = "<ul class=\"".$class."\" >";

        foreach($cats as $cat) {
            $spe = '';
            for( $i = 1; $i <= $cat->depth; $i++ ){
                $spe .= '&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $html.= '<li class="dd-item" data-id="'.$cat->id.'" >
                <a class="destroy-menu btn btn-sm btn-danger pull-right" id="'.$cat->id.'" href="'.route('menu_item.destroy', $cat->id ).'"><i class="fa fa-trash"></i></a>
                <a class="edit-menu btn btn-sm btn-primary pull-right" id="'.$cat->id.'" href="'.route('menu_item.edit', $cat->id ).'" ><i class="fa fa-pencil"></i></a>
                <i class="'.$cat->menu_icon.'"></i>'.$cat->menu_title.$cat->getStatus().  ' <br/>
                <span class="text-sm text-black-50">Link: <a target="_blank" href="'.$cat->menu_link.'">'.$cat->menu_link.'</a></span><br/>
                <span class="text-sm text-black-50">Classes: '.$cat->classes.'</span> <span class="text-sm text-black-50">Type:'.$cat->type.'</span>
                </li>';
            if(  $cat->children ) {
                $html .= self::renderMenuTree($cat->children);
            }
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }


    public static function renderMenuHTML($menus, $class = 'menu'){
        $html = "<ul class=\"".$class."\" >";
        foreach($menus as $menu) {
            $hasChild = (count($menu->children)) ? ' has-children' : '';
            $icon = $menu->menu_icon ? '<span class="menu-icon"><i class="'.$menu->menu_icon.'"></i></span>' : '';
            $html.= '<li class="'.$menu->classes.$hasChild.'  ">
                <a title="'.$menu->menu_title.'" class="" id="menu-item'.$menu->id.'" href="'.$menu->menu_link.'">'.$icon.$menu->menu_title.'</a>';
            if(  count($menu->children) ) {
                $megaClass = $menu->type ;
                if( $menu->type == 'mega' ){
                    $html .= '<div class="mega-wrapper"><div class="container">';
                    $megaClass .= ' row';
                }
                $html .= self::renderMenuHTML($menu->children, $megaClass );
                if( $menu->type == 'mega' ){
                    $html .= '</div></div>';
                }
            }
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }


    public static function renderProductCategoryTree($menus ,$class = 'layer-category' ){
        $html = "<ul class=\"".$class."\" >";
        foreach($menus as $menu) {
            $hasChild = (count($menu->children)) ? ' has-children' : '';

            $icon = $menu->menu_icon ? '<span class="menu-icon">'.$menu->menu_icon.'</span>' : '';

            $link = route('category.product',['slug' => $menu->slug, 'id' => $menu->id ]);
            $html.= '<li class="'.$menu->classes.$hasChild.'  ">
                <a title="'.$menu->category_name.'" class="" id="menu-item'.$menu->id.'" href="'.$link.'">'.$icon.$menu->category_name.'</a>';
            if(  count($menu->children) ) {
                $html .= self::renderProductCategoryTree($menu->children,'sub-cat' );
            }
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }

}