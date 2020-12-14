<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do Usuário 1</h1>";
    }

    public function getData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou a ação DE Get.</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou a ação de Post.</h1>";
    }

    public function testPut(Request $request)
    {
        echo "<h1>Usuário da ediçao é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou a ação de Put.</h1>";
    }

    public function testPatch(Request $request)
    {
        echo "<h1>Usuário da ediçao é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou a ação de Patch.</h1>";
    }

    public function testMatch(Request $request)
    {
        echo "<h1>Disparou a ação de Put/Patch.</h1>";
        echo "<h1>Usuário da ediçao é o de código 2</h1>";
        var_dump($request);
    }

    public function destroy()
    {
        return "<h1>Disparou a ação de Delete para o Registro 1.</h1>";
    }

    public function any()
    {
        return "<h1>Qualquer verbalização é aceita.</h1>";
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        var_dump($route, $name, $action);
    }
}
