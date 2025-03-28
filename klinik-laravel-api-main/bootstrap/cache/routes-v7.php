<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/documentation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/docs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.docs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/oauth2-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.oauth2_callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N2zCrdKzGjQcwrXm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qJForEvFJTNuK5SL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uk0Q04ATu5MoxePx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WMOvkXEPfpECVyMJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aRVgCggf8WRpZA2e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-name' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xv0T8KaIN9xrMl0Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fl3kGkcIneDaJNW3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-social-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QiyLoGycHK66pBlX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LFlFXzWjoF5XrDkb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get-user-photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYcPCMnVvGY6shhV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/is-user-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NwdwlStUf76gd7hx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-user-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rvkeC5WCj6lqNxB2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hsNyIDXZq6gSJ1nG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VMN3ONy5YB9ggVTX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-users-by-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dOMWrWn8mPS8cLMU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfqp6cczrOUy1N6D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6o45hR4xjodak47',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/change-user-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uNDSkCTGc42onyaC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::omfsI4CcwouA0Pwl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G4wPgt2UVEzUDW6I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-doctor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CN38KhSEZtdNgxUy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::En6OdIuOUw3AJ8hS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-doctor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cn1cjwVb5O6Du3eh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U0bkvs2rtmhPEE3r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-departments-in-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wijtyHkyin2xgHY1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::chAzw1YLjtgQGaIx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kSW1XSG35mMYvDOB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XyHEHoWkFL2gXbA4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yvgkE7REJrFplrbX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LuI5V0C0FhN3iLOd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patient-appointments-and-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ANQfvrmIOkTKJqWB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mKo25eza5y4cChev',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7rzZxztaqWHh5kMp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-appointments-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Su7PMeDzBezJPQs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rxEEKxbv6ZWoTcv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M4hU4kQ4WFJFaVuE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/change-appointment-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iGIqoaArHzKqLNri',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZxcJY0VQS2cX3X9F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Fq5eB9HePxwu7He',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-blood' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xzURTsLpA61lP0Xi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-bloods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YewMfKoxg4gLmStF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-bloods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tJ9Sab4V2G8pz1YH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-blood' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eg0Yd0kaqzLv1DQy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-bloods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QCaYuQQwkS3PtbLF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-blood' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ybP2wSzIN9eXMEwo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-blood-donor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pzFki0gv1HLR3A40',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-blood-donors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j3JcbF6Lj7xfT1oi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-blood-donors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zjZTgES0chrKFv5t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-blood-donor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGoovMzObTXrBzPm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-blood-donors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1KzGlqGf7TbynWfZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-blood-donor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sJ867oBEH7oYmeeM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-operation-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LDklFAbyuBhemAU5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-operation-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kD0xsJgzmTET7C31',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-operation-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pHig8CswdF2XDghw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-operation-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bv8LbmzPXSOsPLeU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-operation-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Smevu4pn4qeScDkH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-operation-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aY1fp20ZPkEqyisD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-departments-in-operation-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S04M0gke5eJ6hNkA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-birth-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sNApPk726Rkm6tHe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-birth-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVV8cxe94o4edyYe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-birth-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J48c0NitYeU2xnZY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-birth-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N5Q4FHFKn5P5Dbrz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-birth-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LBWNAptnIyfR6DRV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-birth-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AU3BCSZUHttLOzNR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-death-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2xOVmtvcHFMgY8Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-death-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hsbKCxXAvGbmV6sn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-death-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z1NGyHNZ2XvZjUAD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-death-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JTq5vYGRCnaTfVeM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-death-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::doo33IcxfXQcnsOO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-death-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D97xdqfWgUyOP3cx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-vaccine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jGrFMVfjsHz1s6fa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-vaccines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BirH4sYNwIguNLwW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-vaccines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p7jRlmbO4ZNb8H4x',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-vaccine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d1fnewFWQOolZ6Tm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-vaccines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uwFRVQcn6uqG953q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-vaccine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X8hdM6TmsDDWuv2f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-bed-allotment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qPfbLyclEdg6cpo8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-bed-allotments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PHou6rskhPi0iaqY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-bed-allotments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7VrZWlJhmWD9MND0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-bed-allotment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xursPrsOdwdowQ1o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-bed-allotments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fFubJeiwFXPjaxvu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-bed-allotment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zMCnuuebi6hm7StH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4PGbBkuGivj9Rt6o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kXnazx7KBRArOI7G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6vSPgq2n6w6mkfiF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9nzMy212CVlWeIHH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fCCzlx68xUPkNtnH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dgMdfROIP64HdGWK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/pharmacist-dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n4lJUzSTyTC04uNW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/patient-dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k6AoS6H7ApD4VZkT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patient-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ziOevafiSVtoTQjc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-patient-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0mSQjOjZWU39ZWGZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patient-appointments-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y9AgYaOV16VcCwHf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-patient-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IERe45xLujn1xw2Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patient-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n134MoevdzbBvWKO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-patient-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fkeYtf5eEStlO8kJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-patient-orders-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XHmhYZf13Mxp9D1P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-patient-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmYmxxSNGQ8rgoqZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-patient-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xj9QUnVonXONsQyG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uT0CYMsCRyWpDBMw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EfWwPS8J2yjKCMjU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FP8tu5PwuDHYdTBx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::muCFzPgdw0eYQ78g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/edit-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SSODFZyZbpWBb3F0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aLo2sUVEFRwYbeBQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-nurse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vmgx8LOQnrbehi10',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-nurses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::udyM3kKBnKz73NTu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-nurses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sEOqFkDgr3cRZKt8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-nurse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y2eut7SwbTzoMKMG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-nurses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKi6Yq8hBaZbY3aj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-laboratorist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uVkdiUNLZrVXklDK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-laboratorists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RnUe2ofP4tF8v1Pv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-laboratorists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gTSC9rvsb5JyvAYD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-laboratorist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2UiuC0fl1V7SVje5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-laboratorists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dXqlv9jdvpf3um6Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-pharmacist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HjsP57f71BCOrzb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-pharmacists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJZ3cHiXzpKmsR1v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-pharmacists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pXt0PCTO6xpQZoFy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-pharmacist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZUGisaZyT9lOXmV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-pharmacists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a4L4dB1Lm46YvWXH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W61fYDOIdHZT7ji5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r9IMbSpVHg62wz5l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uysYt3iDZw5u2BpN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CthaE6xpnP9XZcXR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ViHme4HIJUyiqLp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2rOhWSa2Sa2hbU1T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/add-offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Ig3fDF8weVszA6S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3S8UGvUP629j05sJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1Cey5QfAymXFV7n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6mQwbj0uZ7xjZBWU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6CwkWtfUa7JlyUWY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DfT5yur5IX7LuT7S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-services-in-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vONOQtJeBnIipuyQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OLXYV8CRkUkWntwx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZsxGiqvSAaYdddi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-orders-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v3rMtl3aYiDpWl6A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pIcT7tUrIs3fbCcL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AmsasibXZEaORvjJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z3NILY8bxdUOJbDI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bmgSvNTfP0eccvzR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/read-order-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pxx5nopvlaotzNlL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointments-events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iBOI03hFQmi860Zh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-appointments-for-charts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UsHPEbo6AJ2vtFVz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-upcoming-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YCSkVxqH1fpI5BRr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin-appointments-for-charts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Un2j5HWTRefJ7T0W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-our-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e5G1vPDa6WA2G36S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/order-checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ualiIUkiLFTVJrOG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/order-success-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Kc5ymDF3k6NQ5x5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-schedules-set-times' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLwn6tyRpCDihae8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-schedules-fetch-times' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9z3P5pq9K1HQZF27',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-schedules-fetch-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MS9wSbmb8o5sTVQM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/doctor-schedules-toggle-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aqoMsCbbp1MJegtj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-doctor-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9MYCeVmlTQs4lUqx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-searched-doctor-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0CpYbBRqCLj3zhF0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-doctor-appointments-by-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vx6ST6RBhY4zcKsb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/fetch-all-doctor-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TKxFTU0Hpoy4Cs6Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/count-doctor-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::92jBdPCFtZOgR0bt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/delete-doctor-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R82283tBnOIV69Qz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update-doctor-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EFJEyqjF0XuBarhB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/read-appointment-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3oBIYqmKIaC24mz7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/nurse-dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fe4ZraCm031FZll0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointments-fetch-departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dbTyYGPXZ8SiKwFZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointments-fetch-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s63eR4H9nqow9JuP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointments-search-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0ZQb5jN1M8wGOB1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointments-register-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2KfSCSIx7cwEoqDr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/appointment-success-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t4z036rvMDpfXdMV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/check-user-auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UQ451pdf48LOuT7e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get-user-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::czAp8uzBTfRjsgH1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6H74KxMZWj4wmsxF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmFq57ZBlihL2B4F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f7WsKf6JNwyoZzyl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/docs/asset/([^/]++)(*:27)|/verify\\-email/([^/]++)/([^/]++)(*:66))/?$}sDu',
    ),
    3 => 
    array (
      27 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.default.asset',
          ),
          1 => 
          array (
            0 => 'asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'l5-swagger.default.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documentation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.api',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'namespace' => 'L5Swagger',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.docs',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'namespace' => 'L5Swagger',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs/asset/{asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.asset',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'namespace' => 'L5Swagger',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'l5-swagger.default.oauth2_callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/oauth2-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'L5Swagger\\Http\\Middleware\\Config',
        ),
        'l5-swagger.documentation' => 'default',
        'as' => 'l5-swagger.default.oauth2_callback',
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'namespace' => 'L5Swagger',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N2zCrdKzGjQcwrXm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N2zCrdKzGjQcwrXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qJForEvFJTNuK5SL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:68:"function () {
    return [\'message\' => \'Users route is working!\'];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000001090000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qJForEvFJTNuK5SL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'api.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uk0Q04ATu5MoxePx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uk0Q04ATu5MoxePx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WMOvkXEPfpECVyMJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WMOvkXEPfpECVyMJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'api.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'api.password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aRVgCggf8WRpZA2e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateUserInfo@updatePassword',
        'controller' => 'App\\Http\\Controllers\\UpdateUserInfo@updatePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aRVgCggf8WRpZA2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xv0T8KaIN9xrMl0Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-name',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateUserInfo@updateName',
        'controller' => 'App\\Http\\Controllers\\UpdateUserInfo@updateName',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Xv0T8KaIN9xrMl0Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fl3kGkcIneDaJNW3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateUserInfo@updateEmail',
        'controller' => 'App\\Http\\Controllers\\UpdateUserInfo@updateEmail',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Fl3kGkcIneDaJNW3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QiyLoGycHK66pBlX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-social-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateUserInfo@updateSocialLinks',
        'controller' => 'App\\Http\\Controllers\\UpdateUserInfo@updateSocialLinks',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QiyLoGycHK66pBlX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFlFXzWjoF5XrDkb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateUserInfo@updateImage',
        'controller' => 'App\\Http\\Controllers\\UpdateUserInfo@updateImage',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LFlFXzWjoF5XrDkb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vYcPCMnVvGY6shhV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-user-photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getUserProfilePhoto',
        'controller' => 'App\\Http\\Controllers\\UserController@getUserProfilePhoto',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vYcPCMnVvGY6shhV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NwdwlStUf76gd7hx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/is-user-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@isUserAdmin',
        'controller' => 'App\\Http\\Controllers\\UserController@isUserAdmin',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::NwdwlStUf76gd7hx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rvkeC5WCj6lqNxB2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-user-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getUserRole',
        'controller' => 'App\\Http\\Controllers\\UserController@getUserRole',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::rvkeC5WCj6lqNxB2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hsNyIDXZq6gSJ1nG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@getUsers',
        'controller' => 'App\\Http\\Controllers\\UsersController@getUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hsNyIDXZq6gSJ1nG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VMN3ONy5YB9ggVTX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@getSearchedUsers',
        'controller' => 'App\\Http\\Controllers\\UsersController@getSearchedUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::VMN3ONy5YB9ggVTX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dOMWrWn8mPS8cLMU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-users-by-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@getUsersByRoles',
        'controller' => 'App\\Http\\Controllers\\UsersController@getUsersByRoles',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dOMWrWn8mPS8cLMU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfqp6cczrOUy1N6D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@getAllUsers',
        'controller' => 'App\\Http\\Controllers\\UsersController@getAllUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cfqp6cczrOUy1N6D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6o45hR4xjodak47' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@countUsers',
        'controller' => 'App\\Http\\Controllers\\UsersController@countUsers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::F6o45hR4xjodak47',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNDSkCTGc42onyaC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/change-user-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@changeUserRole',
        'controller' => 'App\\Http\\Controllers\\UserController@changeUserRole',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uNDSkCTGc42onyaC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::omfsI4CcwouA0Pwl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteUser',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::omfsI4CcwouA0Pwl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G4wPgt2UVEzUDW6I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@getDoctors',
        'controller' => 'App\\Http\\Controllers\\DoctorController@getDoctors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::G4wPgt2UVEzUDW6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CN38KhSEZtdNgxUy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@addDoctor',
        'controller' => 'App\\Http\\Controllers\\DoctorController@addDoctor',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CN38KhSEZtdNgxUy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::En6OdIuOUw3AJ8hS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@getSearchedDoctors',
        'controller' => 'App\\Http\\Controllers\\DoctorController@getSearchedDoctors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::En6OdIuOUw3AJ8hS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cn1cjwVb5O6Du3eh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@deleteDoctor',
        'controller' => 'App\\Http\\Controllers\\DoctorController@deleteDoctor',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cn1cjwVb5O6Du3eh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0bkvs2rtmhPEE3r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@getAllDoctors',
        'controller' => 'App\\Http\\Controllers\\DoctorController@getAllDoctors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::U0bkvs2rtmhPEE3r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wijtyHkyin2xgHY1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-departments-in-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@getAllDepartments',
        'controller' => 'App\\Http\\Controllers\\DoctorController@getAllDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::wijtyHkyin2xgHY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::chAzw1YLjtgQGaIx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@addPatient',
        'controller' => 'App\\Http\\Controllers\\PatientController@addPatient',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::chAzw1YLjtgQGaIx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kSW1XSG35mMYvDOB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getPatients',
        'controller' => 'App\\Http\\Controllers\\PatientController@getPatients',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kSW1XSG35mMYvDOB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XyHEHoWkFL2gXbA4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getSearchedPatients',
        'controller' => 'App\\Http\\Controllers\\PatientController@getSearchedPatients',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::XyHEHoWkFL2gXbA4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yvgkE7REJrFplrbX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@deletePatient',
        'controller' => 'App\\Http\\Controllers\\PatientController@deletePatient',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yvgkE7REJrFplrbX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LuI5V0C0FhN3iLOd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getAllPatients',
        'controller' => 'App\\Http\\Controllers\\PatientController@getAllPatients',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LuI5V0C0FhN3iLOd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ANQfvrmIOkTKJqWB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/fetch-patient-appointments-and-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getPatientAppointmentsAndOrders',
        'controller' => 'App\\Http\\Controllers\\PatientController@getPatientAppointmentsAndOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ANQfvrmIOkTKJqWB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mKo25eza5y4cChev' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getAppointments',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::mKo25eza5y4cChev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7rzZxztaqWHh5kMp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getSearchedAppointments',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getSearchedAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7rzZxztaqWHh5kMp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Su7PMeDzBezJPQs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-appointments-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsByStatus',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsByStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7Su7PMeDzBezJPQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rxEEKxbv6ZWoTcv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getAllAppointments',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getAllAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4rxEEKxbv6ZWoTcv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M4hU4kQ4WFJFaVuE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@countAppointments',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@countAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::M4hU4kQ4WFJFaVuE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iGIqoaArHzKqLNri' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/change-appointment-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@changeAppointmentStatus',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@changeAppointmentStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::iGIqoaArHzKqLNri',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZxcJY0VQS2cX3X9F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@deleteAppointment',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@deleteAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZxcJY0VQS2cX3X9F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Fq5eB9HePxwu7He' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@updateAppointment',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@updateAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7Fq5eB9HePxwu7He',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xzURTsLpA61lP0Xi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-blood',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@addBlood',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@addBlood',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::xzURTsLpA61lP0Xi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YewMfKoxg4gLmStF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-bloods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@getBloods',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@getBloods',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::YewMfKoxg4gLmStF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tJ9Sab4V2G8pz1YH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-bloods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@getSearchedBloods',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@getSearchedBloods',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::tJ9Sab4V2G8pz1YH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eg0Yd0kaqzLv1DQy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-blood',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@deleteBlood',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@deleteBlood',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Eg0Yd0kaqzLv1DQy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCaYuQQwkS3PtbLF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-bloods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@getAllBloods',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@getAllBloods',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QCaYuQQwkS3PtbLF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ybP2wSzIN9eXMEwo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-blood',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodBankController@updateBlood',
        'controller' => 'App\\Http\\Controllers\\BloodBankController@updateBlood',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ybP2wSzIN9eXMEwo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pzFki0gv1HLR3A40' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-blood-donor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@addBloodDonor',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@addBloodDonor',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pzFki0gv1HLR3A40',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j3JcbF6Lj7xfT1oi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-blood-donors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@getBloodDonors',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@getBloodDonors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::j3JcbF6Lj7xfT1oi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zjZTgES0chrKFv5t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-blood-donors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@getSearchedBloodDonors',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@getSearchedBloodDonors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zjZTgES0chrKFv5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGoovMzObTXrBzPm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-blood-donor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@deleteBloodDonor',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@deleteBloodDonor',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cGoovMzObTXrBzPm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1KzGlqGf7TbynWfZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-blood-donors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@getAllBloodDonors',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@getAllBloodDonors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::1KzGlqGf7TbynWfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sJ867oBEH7oYmeeM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-blood-donor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BloodDonorController@updateBloodDonor',
        'controller' => 'App\\Http\\Controllers\\BloodDonorController@updateBloodDonor',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::sJ867oBEH7oYmeeM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LDklFAbyuBhemAU5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-operation-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@addOperationReport',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@addOperationReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LDklFAbyuBhemAU5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kD0xsJgzmTET7C31' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-operation-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@getOperationReports',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@getOperationReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kD0xsJgzmTET7C31',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pHig8CswdF2XDghw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-operation-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@getSearchedOperationReports',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@getSearchedOperationReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pHig8CswdF2XDghw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bv8LbmzPXSOsPLeU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-operation-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@deleteOperationReport',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@deleteOperationReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Bv8LbmzPXSOsPLeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Smevu4pn4qeScDkH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-operation-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@getAllOperationReports',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@getAllOperationReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Smevu4pn4qeScDkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aY1fp20ZPkEqyisD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-operation-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\OperationReportController@updateOperationReport',
        'controller' => 'App\\Http\\Controllers\\OperationReportController@updateOperationReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aY1fp20ZPkEqyisD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S04M0gke5eJ6hNkA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-departments-in-operation-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@getAllDepartments',
        'controller' => 'App\\Http\\Controllers\\DoctorController@getAllDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::S04M0gke5eJ6hNkA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sNApPk726Rkm6tHe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-birth-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@addBirthReport',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@addBirthReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::sNApPk726Rkm6tHe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVV8cxe94o4edyYe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-birth-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@getBirthReports',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@getBirthReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::YVV8cxe94o4edyYe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J48c0NitYeU2xnZY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-birth-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@getSearchedBirthReports',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@getSearchedBirthReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::J48c0NitYeU2xnZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N5Q4FHFKn5P5Dbrz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-birth-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@deleteBirthReport',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@deleteBirthReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::N5Q4FHFKn5P5Dbrz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LBWNAptnIyfR6DRV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-birth-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@getAllBirthReports',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@getAllBirthReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LBWNAptnIyfR6DRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AU3BCSZUHttLOzNR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-birth-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BirthReportController@updateBirthReport',
        'controller' => 'App\\Http\\Controllers\\BirthReportController@updateBirthReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::AU3BCSZUHttLOzNR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2xOVmtvcHFMgY8Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-death-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@addDeathReport',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@addDeathReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::S2xOVmtvcHFMgY8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hsbKCxXAvGbmV6sn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-death-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@getDeathReports',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@getDeathReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hsbKCxXAvGbmV6sn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z1NGyHNZ2XvZjUAD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-death-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@getSearchedDeathReports',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@getSearchedDeathReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Z1NGyHNZ2XvZjUAD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JTq5vYGRCnaTfVeM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-death-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@deleteDeathReport',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@deleteDeathReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::JTq5vYGRCnaTfVeM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::doo33IcxfXQcnsOO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-death-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@getAllDeathReports',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@getAllDeathReports',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::doo33IcxfXQcnsOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D97xdqfWgUyOP3cx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-death-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\DeathReportController@updateDeathReport',
        'controller' => 'App\\Http\\Controllers\\DeathReportController@updateDeathReport',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::D97xdqfWgUyOP3cx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jGrFMVfjsHz1s6fa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-vaccine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@addVaccine',
        'controller' => 'App\\Http\\Controllers\\VaccineController@addVaccine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jGrFMVfjsHz1s6fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BirH4sYNwIguNLwW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-vaccines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@getVaccines',
        'controller' => 'App\\Http\\Controllers\\VaccineController@getVaccines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::BirH4sYNwIguNLwW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p7jRlmbO4ZNb8H4x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-vaccines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@getSearchedVaccines',
        'controller' => 'App\\Http\\Controllers\\VaccineController@getSearchedVaccines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p7jRlmbO4ZNb8H4x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d1fnewFWQOolZ6Tm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-vaccine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@deleteVaccine',
        'controller' => 'App\\Http\\Controllers\\VaccineController@deleteVaccine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::d1fnewFWQOolZ6Tm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uwFRVQcn6uqG953q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-vaccines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@getAllVaccines',
        'controller' => 'App\\Http\\Controllers\\VaccineController@getAllVaccines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uwFRVQcn6uqG953q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X8hdM6TmsDDWuv2f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-vaccine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\VaccineController@updateVaccine',
        'controller' => 'App\\Http\\Controllers\\VaccineController@updateVaccine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::X8hdM6TmsDDWuv2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qPfbLyclEdg6cpo8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-bed-allotment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@addBedAllotment',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@addBedAllotment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::qPfbLyclEdg6cpo8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PHou6rskhPi0iaqY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-bed-allotments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@getBedAllotments',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@getBedAllotments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PHou6rskhPi0iaqY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7VrZWlJhmWD9MND0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-bed-allotments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@getSearchedBedAllotments',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@getSearchedBedAllotments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7VrZWlJhmWD9MND0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xursPrsOdwdowQ1o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-bed-allotment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@deleteBedAllotment',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@deleteBedAllotment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::xursPrsOdwdowQ1o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fFubJeiwFXPjaxvu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-bed-allotments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@getAllBedAllotments',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@getAllBedAllotments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fFubJeiwFXPjaxvu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zMCnuuebi6hm7StH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-bed-allotment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_doctor_nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\BedAllotmentController@updateBedAllotment',
        'controller' => 'App\\Http\\Controllers\\BedAllotmentController@updateBedAllotment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zMCnuuebi6hm7StH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4PGbBkuGivj9Rt6o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@addMedicine',
        'controller' => 'App\\Http\\Controllers\\MedicineController@addMedicine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4PGbBkuGivj9Rt6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kXnazx7KBRArOI7G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@getMedicines',
        'controller' => 'App\\Http\\Controllers\\MedicineController@getMedicines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kXnazx7KBRArOI7G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6vSPgq2n6w6mkfiF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@getSearchedMedicines',
        'controller' => 'App\\Http\\Controllers\\MedicineController@getSearchedMedicines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6vSPgq2n6w6mkfiF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9nzMy212CVlWeIHH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@deleteMedicine',
        'controller' => 'App\\Http\\Controllers\\MedicineController@deleteMedicine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9nzMy212CVlWeIHH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fCCzlx68xUPkNtnH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@getAllMedicines',
        'controller' => 'App\\Http\\Controllers\\MedicineController@getAllMedicines',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fCCzlx68xUPkNtnH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dgMdfROIP64HdGWK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin_nurse_pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\MedicineController@updateMedicine',
        'controller' => 'App\\Http\\Controllers\\MedicineController@updateMedicine',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dgMdfROIP64HdGWK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n4lJUzSTyTC04uNW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/pharmacist-dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'pharmacist',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@getAllPharmacistDashboardData',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@getAllPharmacistDashboardData',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::n4lJUzSTyTC04uNW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k6AoS6H7ApD4VZkT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/patient-dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getPatientDashboardData',
        'controller' => 'App\\Http\\Controllers\\PatientController@getPatientDashboardData',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::k6AoS6H7ApD4VZkT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ziOevafiSVtoTQjc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-patient-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getPatientAppointments',
        'controller' => 'App\\Http\\Controllers\\PatientController@getPatientAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ziOevafiSVtoTQjc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0mSQjOjZWU39ZWGZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-patient-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getSearchedPatientAppointments',
        'controller' => 'App\\Http\\Controllers\\PatientController@getSearchedPatientAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0mSQjOjZWU39ZWGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y9AgYaOV16VcCwHf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-patient-appointments-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getPatientAppointmentsByStatus',
        'controller' => 'App\\Http\\Controllers\\PatientController@getPatientAppointmentsByStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Y9AgYaOV16VcCwHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IERe45xLujn1xw2Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-patient-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@countPatientAppointments',
        'controller' => 'App\\Http\\Controllers\\PatientController@countPatientAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::IERe45xLujn1xw2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n134MoevdzbBvWKO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-patient-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getOrders',
        'controller' => 'App\\Http\\Controllers\\PatientController@getOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::n134MoevdzbBvWKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fkeYtf5eEStlO8kJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-patient-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getSearchedOrders',
        'controller' => 'App\\Http\\Controllers\\PatientController@getSearchedOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fkeYtf5eEStlO8kJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XHmhYZf13Mxp9D1P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-patient-orders-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getOrdersByStatus',
        'controller' => 'App\\Http\\Controllers\\PatientController@getOrdersByStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::XHmhYZf13Mxp9D1P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmYmxxSNGQ8rgoqZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-patient-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@getAllOrders',
        'controller' => 'App\\Http\\Controllers\\PatientController@getAllOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::HmYmxxSNGQ8rgoqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xj9QUnVonXONsQyG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-patient-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'patient',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientController@countOrders',
        'controller' => 'App\\Http\\Controllers\\PatientController@countOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Xj9QUnVonXONsQyG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uT0CYMsCRyWpDBMw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@addDepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@addDepartment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uT0CYMsCRyWpDBMw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EfWwPS8J2yjKCMjU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@getDepartments',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@getDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::EfWwPS8J2yjKCMjU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FP8tu5PwuDHYdTBx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@getSearchedDepartments',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@getSearchedDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::FP8tu5PwuDHYdTBx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::muCFzPgdw0eYQ78g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/delete-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@deleteDepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@deleteDepartment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::muCFzPgdw0eYQ78g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSODFZyZbpWBb3F0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/edit-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@editDepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@editDepartment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::SSODFZyZbpWBb3F0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aLo2sUVEFRwYbeBQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentsController@getAllDepartments',
        'controller' => 'App\\Http\\Controllers\\DepartmentsController@getAllDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aLo2sUVEFRwYbeBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vmgx8LOQnrbehi10' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-nurse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@addNurse',
        'controller' => 'App\\Http\\Controllers\\NurseController@addNurse',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Vmgx8LOQnrbehi10',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::udyM3kKBnKz73NTu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-nurses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@getNurses',
        'controller' => 'App\\Http\\Controllers\\NurseController@getNurses',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::udyM3kKBnKz73NTu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sEOqFkDgr3cRZKt8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-nurses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@getSearchedNurses',
        'controller' => 'App\\Http\\Controllers\\NurseController@getSearchedNurses',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::sEOqFkDgr3cRZKt8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y2eut7SwbTzoMKMG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-nurse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@deleteNurse',
        'controller' => 'App\\Http\\Controllers\\NurseController@deleteNurse',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Y2eut7SwbTzoMKMG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HKi6Yq8hBaZbY3aj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-nurses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@getAllNurses',
        'controller' => 'App\\Http\\Controllers\\NurseController@getAllNurses',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::HKi6Yq8hBaZbY3aj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uVkdiUNLZrVXklDK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-laboratorist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratoristController@addLaboratorist',
        'controller' => 'App\\Http\\Controllers\\LaboratoristController@addLaboratorist',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uVkdiUNLZrVXklDK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RnUe2ofP4tF8v1Pv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-laboratorists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratoristController@getLaboratorists',
        'controller' => 'App\\Http\\Controllers\\LaboratoristController@getLaboratorists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RnUe2ofP4tF8v1Pv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gTSC9rvsb5JyvAYD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-laboratorists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratoristController@getSearchedLaboratorists',
        'controller' => 'App\\Http\\Controllers\\LaboratoristController@getSearchedLaboratorists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gTSC9rvsb5JyvAYD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2UiuC0fl1V7SVje5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-laboratorist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratoristController@deleteLaboratorist',
        'controller' => 'App\\Http\\Controllers\\LaboratoristController@deleteLaboratorist',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2UiuC0fl1V7SVje5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dXqlv9jdvpf3um6Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-laboratorists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LaboratoristController@getAllLaboratorists',
        'controller' => 'App\\Http\\Controllers\\LaboratoristController@getAllLaboratorists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dXqlv9jdvpf3um6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8HjsP57f71BCOrzb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-pharmacist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@addPharmacist',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@addPharmacist',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8HjsP57f71BCOrzb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PJZ3cHiXzpKmsR1v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-pharmacists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@getPharmacists',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@getPharmacists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PJZ3cHiXzpKmsR1v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pXt0PCTO6xpQZoFy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-pharmacists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@getSearchedPharmacists',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@getSearchedPharmacists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pXt0PCTO6xpQZoFy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZUGisaZyT9lOXmV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-pharmacist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@deletePharmacist',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@deletePharmacist',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::tZUGisaZyT9lOXmV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a4L4dB1Lm46YvWXH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-pharmacists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PharmacistController@getAllPharmacists',
        'controller' => 'App\\Http\\Controllers\\PharmacistController@getAllPharmacists',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::a4L4dB1Lm46YvWXH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W61fYDOIdHZT7ji5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@addService',
        'controller' => 'App\\Http\\Controllers\\ServiceController@addService',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::W61fYDOIdHZT7ji5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9IMbSpVHg62wz5l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@getServices',
        'controller' => 'App\\Http\\Controllers\\ServiceController@getServices',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::r9IMbSpVHg62wz5l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uysYt3iDZw5u2BpN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@getSearchedServices',
        'controller' => 'App\\Http\\Controllers\\ServiceController@getSearchedServices',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uysYt3iDZw5u2BpN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CthaE6xpnP9XZcXR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@deleteService',
        'controller' => 'App\\Http\\Controllers\\ServiceController@deleteService',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CthaE6xpnP9XZcXR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7ViHme4HIJUyiqLp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@getAllServices',
        'controller' => 'App\\Http\\Controllers\\ServiceController@getAllServices',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7ViHme4HIJUyiqLp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2rOhWSa2Sa2hbU1T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@updateService',
        'controller' => 'App\\Http\\Controllers\\ServiceController@updateService',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2rOhWSa2Sa2hbU1T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Ig3fDF8weVszA6S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/add-offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@addOffer',
        'controller' => 'App\\Http\\Controllers\\OfferController@addOffer',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8Ig3fDF8weVszA6S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3S8UGvUP629j05sJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@getOffers',
        'controller' => 'App\\Http\\Controllers\\OfferController@getOffers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::3S8UGvUP629j05sJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1Cey5QfAymXFV7n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@getSearchedOffers',
        'controller' => 'App\\Http\\Controllers\\OfferController@getSearchedOffers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::D1Cey5QfAymXFV7n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6mQwbj0uZ7xjZBWU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@deleteOffer',
        'controller' => 'App\\Http\\Controllers\\OfferController@deleteOffer',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6mQwbj0uZ7xjZBWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6CwkWtfUa7JlyUWY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@getAllOffers',
        'controller' => 'App\\Http\\Controllers\\OfferController@getAllOffers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6CwkWtfUa7JlyUWY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DfT5yur5IX7LuT7S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@updateOffer',
        'controller' => 'App\\Http\\Controllers\\OfferController@updateOffer',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::DfT5yur5IX7LuT7S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vONOQtJeBnIipuyQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-services-in-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OfferController@getServices',
        'controller' => 'App\\Http\\Controllers\\OfferController@getServices',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vONOQtJeBnIipuyQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OLXYV8CRkUkWntwx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getOrders',
        'controller' => 'App\\Http\\Controllers\\OrderController@getOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OLXYV8CRkUkWntwx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZsxGiqvSAaYdddi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getSearchedOrders',
        'controller' => 'App\\Http\\Controllers\\OrderController@getSearchedOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::YZsxGiqvSAaYdddi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v3rMtl3aYiDpWl6A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-orders-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getOrdersByStatus',
        'controller' => 'App\\Http\\Controllers\\OrderController@getOrdersByStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::v3rMtl3aYiDpWl6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pIcT7tUrIs3fbCcL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@getAllOrders',
        'controller' => 'App\\Http\\Controllers\\OrderController@getAllOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pIcT7tUrIs3fbCcL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AmsasibXZEaORvjJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@countOrders',
        'controller' => 'App\\Http\\Controllers\\OrderController@countOrders',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::AmsasibXZEaORvjJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z3NILY8bxdUOJbDI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@deleteOrder',
        'controller' => 'App\\Http\\Controllers\\OrderController@deleteOrder',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::z3NILY8bxdUOJbDI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bmgSvNTfP0eccvzR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@updateOrder',
        'controller' => 'App\\Http\\Controllers\\OrderController@updateOrder',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bmgSvNTfP0eccvzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pxx5nopvlaotzNlL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/read-order-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderNotificationController@setNotificationsToRead',
        'controller' => 'App\\Http\\Controllers\\OrderNotificationController@setNotificationsToRead',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pxx5nopvlaotzNlL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iBOI03hFQmi860Zh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/appointments-events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getEvents',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getEvents',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::iBOI03hFQmi860Zh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UsHPEbo6AJ2vtFVz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/doctor-appointments-for-charts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsForDoctorCharts',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsForDoctorCharts',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::UsHPEbo6AJ2vtFVz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YCSkVxqH1fpI5BRr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/doctor-upcoming-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getUpcomingAppointmentsAndTopPayingPatientsForDoctorCharts',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getUpcomingAppointmentsAndTopPayingPatientsForDoctorCharts',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::YCSkVxqH1fpI5BRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Un2j5HWTRefJ7T0W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin-appointments-for-charts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsAndOrdersStatsForAdminCharts',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@getAppointmentsAndOrdersStatsForAdminCharts',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Un2j5HWTRefJ7T0W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e5G1vPDa6WA2G36S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-our-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\OurOffersController@getOffers',
        'controller' => 'App\\Http\\Controllers\\OurOffersController@getOffers',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::e5G1vPDa6WA2G36S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ualiIUkiLFTVJrOG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/order-checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@orderCheckout',
        'controller' => 'App\\Http\\Controllers\\PaymentController@orderCheckout',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ualiIUkiLFTVJrOG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Kc5ymDF3k6NQ5x5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/order-success-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@success',
        'controller' => 'App\\Http\\Controllers\\PaymentController@success',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2Kc5ymDF3k6NQ5x5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KLwn6tyRpCDihae8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/doctor-schedules-set-times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@setTimes',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@setTimes',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::KLwn6tyRpCDihae8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9z3P5pq9K1HQZF27' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/doctor-schedules-fetch-times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@getTimes',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@getTimes',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9z3P5pq9K1HQZF27',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MS9wSbmb8o5sTVQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/doctor-schedules-fetch-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@getAvailability',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@getAvailability',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::MS9wSbmb8o5sTVQM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aqoMsCbbp1MJegtj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/doctor-schedules-toggle-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@toggleAvailability',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@toggleAvailability',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aqoMsCbbp1MJegtj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9MYCeVmlTQs4lUqx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-doctor-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@getDoctorAppointments',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@getDoctorAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9MYCeVmlTQs4lUqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0CpYbBRqCLj3zhF0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-searched-doctor-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@getSearchedDoctorAppointments',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@getSearchedDoctorAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0CpYbBRqCLj3zhF0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vx6ST6RBhY4zcKsb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-doctor-appointments-by-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@getDoctorAppointmentsByStatus',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@getDoctorAppointmentsByStatus',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Vx6ST6RBhY4zcKsb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TKxFTU0Hpoy4Cs6Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/fetch-all-doctor-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@getAllDoctorAppointments',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@getAllDoctorAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::TKxFTU0Hpoy4Cs6Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::92jBdPCFtZOgR0bt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/count-doctor-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@countDoctorAppointments',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@countDoctorAppointments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::92jBdPCFtZOgR0bt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R82283tBnOIV69Qz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/delete-doctor-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@deleteDoctorAppointment',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@deleteDoctorAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::R82283tBnOIV69Qz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EFJEyqjF0XuBarhB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update-doctor-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorAppointmentController@updateDoctorAppointment',
        'controller' => 'App\\Http\\Controllers\\DoctorAppointmentController@updateDoctorAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::EFJEyqjF0XuBarhB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3oBIYqmKIaC24mz7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/read-appointment-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'doctor',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@setNotificationsToRead',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@setNotificationsToRead',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::3oBIYqmKIaC24mz7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fe4ZraCm031FZll0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/nurse-dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'nurse',
        ),
        'uses' => 'App\\Http\\Controllers\\NurseController@getAllNurseDashboardData',
        'controller' => 'App\\Http\\Controllers\\NurseController@getAllNurseDashboardData',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Fe4ZraCm031FZll0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dbTyYGPXZ8SiKwFZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/appointments-fetch-departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentReservation@getDepartments',
        'controller' => 'App\\Http\\Controllers\\AppointmentReservation@getDepartments',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dbTyYGPXZ8SiKwFZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s63eR4H9nqow9JuP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/appointments-fetch-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentReservation@getDoctors',
        'controller' => 'App\\Http\\Controllers\\AppointmentReservation@getDoctors',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::s63eR4H9nqow9JuP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M0ZQb5jN1M8wGOB1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/appointments-search-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentReservation@searchAvailability',
        'controller' => 'App\\Http\\Controllers\\AppointmentReservation@searchAvailability',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::M0ZQb5jN1M8wGOB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KfSCSIx7cwEoqDr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/appointments-register-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentReservation@registerAppointment',
        'controller' => 'App\\Http\\Controllers\\AppointmentReservation@registerAppointment',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2KfSCSIx7cwEoqDr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t4z036rvMDpfXdMV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/appointment-success-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentReservation@success',
        'controller' => 'App\\Http\\Controllers\\AppointmentReservation@success',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::t4z036rvMDpfXdMV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UQ451pdf48LOuT7e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/check-user-auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@checkAuth',
        'controller' => 'App\\Http\\Controllers\\UserController@checkAuth',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::UQ451pdf48LOuT7e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::czAp8uzBTfRjsgH1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-user-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getUserData',
        'controller' => 'App\\Http\\Controllers\\UserController@getUserData',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::czAp8uzBTfRjsgH1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6H74KxMZWj4wmsxF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SseController@streamNotifications',
        'controller' => 'App\\Http\\Controllers\\SseController@streamNotifications',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6H74KxMZWj4wmsxF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FmFq57ZBlihL2B4F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:881:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'C:\\\\Users\\\\Victor\\\\OneDrive\\\\Desktop\\\\consolata backend\\\\klinik-laravel-api-main\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Foundation\\\\Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000003c30000000000000000";}}',
        'as' => 'generated::FmFq57ZBlihL2B4F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f7WsKf6JNwyoZzyl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:59:"function () {
    return [\'Laravel\' => app()->version()];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004740000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f7WsKf6JNwyoZzyl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
