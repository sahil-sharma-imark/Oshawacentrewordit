<?php
/*
Plugin Name: Complete game
Description: A Compelete Gmae plugin to demonstrate wordpress functionality
Author: Imark Infotech 
Version: 0.1
*/
add_action('admin_menu', 'completegame_plugin_setup_menu');
 
function completegame_plugin_setup_menu(){
    add_menu_page( 'Complete Game Plugin Page', 'Complete Game Users', 'manage_options', 'completegame-plugin', 'completegame_init' );
    add_menu_page( 'Complete Game Plugin Page', 'InComplete Game Users', 'manage_options', 'incompletegame-plugin', 'incompletegame_init' );
}
 
function completegame_init(){

    global $wpdb;
    $table = $wpdb->prefix."completegame";
    $query="select * from $table where status='complete'";
    $query_result=$wpdb->get_results($query,ARRAY_A);
      
       
    echo '<div class="wrap">
    <h2>Complete Game Users</h2>
        <table class="wp-list-table widefat fixed striped table-view-list contact_forms">
            <thead>
                <tr>
                    <th>Email</th>  
                    <th>Status</th> 
                    <th>Date</th>   
                </tr>
            </thead>    
            <tbody id="the-list" data-wp-lists="list:contact_form">';
            foreach($query_result as $data){
               echo '<tr>
                    <td>'.$data['email'].'</td>
                    <td>'.$data['status'].'</td>
                    <td>'.$data['created_at'].'</td>
                <tr>';
            } 
           echo '</tbody>
            <tfoot>
                <tr>    
                    <th>Email</th>  
                    <th>Status</th> 
                    <th>Date</th>   
                </tr>
            </tfoot>
        </table>
</div>';
   
}





 
function incompletegame_init(){

    global $wpdb;
    $table = $wpdb->prefix."completegame";
    $query="select * from $table where status='incomplete'";
    $query_result=$wpdb->get_results($query,ARRAY_A);
      
       
    echo '<div class="wrap">
    <h2>InComplete Game Users</h2>
        <table class="wp-list-table widefat fixed striped table-view-list contact_forms">
            <thead>
                <tr>
                    <th>Email</th>  
                    <th>Status</th> 
                    <th>Date</th>   
                </tr>
            </thead>    
            <tbody id="the-list" data-wp-lists="list:contact_form">';
            foreach($query_result as $data){
               echo '<tr>
                    <td>'.$data['email'].'</td>
                    <td>'.$data['status'].'</td>
                    <td>'.$data['created_at'].'</td>
                <tr>';
            } 
           echo '</tbody>
            <tfoot>
                <tr>    
                    <th>Email</th>  
                    <th>Status</th> 
                    <th>Date</th>   
                </tr>
            </tfoot>
        </table>
</div>';
   
}