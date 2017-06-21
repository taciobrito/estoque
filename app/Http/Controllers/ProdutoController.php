<?php 
namespace App\Http\Controllers;
use Auth;
use Request;
use Validator;
use App\Produto;
use App\Categoria;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdutoRequest;
	
	class ProdutoController extends Controller {

		public function __construct() {
        $this->middleware('autorizador');
    }

		public function lista(){
			$produtos = Produto::all();
			return view('listagem')->with('produtos', $produtos);
		}

		public function mostra($id){
			$produto = Produto::find($id);
			return view('detalhes')->with('produto', $produto);
		}

		public function novo(){
			return view('formulario')->with('categorias', Categoria::all());
		}

		public function salvar(ProdutoRequest $request){
			// $params = Request::all();
			// $produto = new Produto($params);
			// $produto->save();
			Produto::create( $request->all() );
			return redirect('/produtos');
		}

		public function retornaJson(){
			$produtos = Produto::all();
			return $produtos;
		}

		public function remove($id){
			$produto = Produto::find($id);
			$produto->delete();
			return redirect('/produtos');
		}

	}