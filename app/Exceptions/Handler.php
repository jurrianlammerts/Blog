<?php
    namespace App\Exceptions;
    use Exception;
    use Request;
    use Illuminate\Auth\AuthenticationException;
    use Response;
    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    
    class Handler extends ExceptionHandler
    {
        /**
         * Convert an authentication exception into a response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Illuminate\Auth\AuthenticationException  $exception
         * @return \Illuminate\Http\Response
         */
        protected function unauthenticated($request, AuthenticationException $exception)
        {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
    
            $guard = array_get($exception->guards(), 0);
    
            switch ($guard) {
              case 'admin':
                $login = 'admin.login';
                break;
    
              default:
                $login = 'login';
                break;
            }
            return redirect()->guest(route($login));
        }
    }