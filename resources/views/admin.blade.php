@extends('admin-course')
@section('content')

    <table class="table table-striped" style="display: inline-table; text-align: left">
        <tr>
            <th>Курсант</th>

<?php

            foreach ($tasks as $key=>$task){
                echo '<th>'.($key+1).'</th>';
            }
            echo '<th style="text-align: center">Итог</th></tr>';
//
//
//        foreach ($users as $user)
//        {
//            var_dump($user->name);
//        }


        foreach ($users as $user){
            echo "<tr>
                        <td>$user->name</td>";
            foreach ($tasks as $task){
                echo '<td>'.$user->tasks[$task][0].'/'.$user->tasks[$task][1].'</td>';
            }
            echo "<td style='text-align: center'>".$user->summ."/".$user->summ_all."</td>";
        }

        ?>
    </table>



@stop