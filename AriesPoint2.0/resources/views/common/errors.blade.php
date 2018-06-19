<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 07.01.18
 * Time: 11:31
 */
@if (count($errors) > 0)
    <!-- Список ошибок формы -->
    <div class="alert alert-danger">
        <strong>Упс! Что-то пошло не так!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif