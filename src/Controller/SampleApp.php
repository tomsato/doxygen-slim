<?php
namespace Myapp\Controller;

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * @file SampleApp.php
 * @brief サンプルのコントローラークラス(ファイルの簡単な説明を記述する)
 * @author tomsato
 * @date 2018/09/24
 * @details トップページ(GET: /)を表示するためためのクラスを持っている(ファイルの詳細な説明を記述する)
 */

/**
 * @brief サンプルページを表示するためのコントローラークラス(クラスの簡単な説明を記述する)
 * @details 現在はトップページ(GET: /)を表示するための関数だけ持っている(クラスの詳細な説明を記述する)
 */
class SampleApp extends BaseController
{
    /**
     * @brief トップページ(GET: /)を表示するための関数(関数の簡単な説明を記述する)
     * @param request 引数の説明 - ex: requestインターフェース
     * @param response 引数の説明 - ex: responseインターフェース
     * @return 戻り値の説明
     * @detail モデルクラスから文字列を受けとってレスポンスを返す(関数の詳細な説明を記述する)
     */
    public function index(Request $request, Response $response)
    {
        //! 変数の説明①
        $str = \Myapp\Model\SampleModel::getStr();

        /**
         * 変数の説明②
         */
        $request = [
            'hoge' => $str
        ];

        //! 変数の説明③
        $view = new Twig(__DIR__ . '/../View', [
                'cache' => false,
            ]
        );

        return $view->render($response, 'test.twig', $request);
    }
}

