<?php

function usersTotalCount() {
    return \App\User::count();
}

function usersNewTodayCount() {
    return \App\User::whereDate('created_at', DB::raw('CURDATE()'))->count();
}