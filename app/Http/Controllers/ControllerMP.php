<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMP extends Controller
{	
    public function welcome(){
        return view('dashboard');
    }
    public function versp(){
        $phones=DB::table('smartphone')->get();
        return view('PhonesMP',compact('phones'));
    }
    public function buscarsp(Request $req){
        $modelo=$req->buscarphone;
        $phones=DB::select('select * from smartphone where MODELO_SP = ?',[$modelo]);
        return view('PhonesMP', compact('phones'));
    }
    public function crearsp(){
        return view('creaphoneMP');        
    }
    public function insertarsp(Request $req){
        $Editado= 'No editada 📘';
        DB::table('smartphone')->insert([
            'MODELO_SP'=>$req->Modelo,
            'MARCA_SP'=>$req->Marca,
            'ALMACENAMIENTO_SP'=>$req->Almacenamiento,
            'PANTALLA_SP'=>$req->Pantalla,
            'CAMARA_SP'=>$req->Camara,
            'BATERIA_sP'=>$req->Bateria,
            'REDES_SP'=>$req->Bandas,
            'PROCESADOR_SP'=>$req->Procesador,
            'SISTEMAOP_SP'=>$req->SistemaOp,
            'CONECTIVIDAD_SP'=>$req->Conectividad,
            'SENSORES_SP'=>$req->Sensores,
            'EDITADO_SP'=>$Editado
    ]);
    return back()->with('PIExitoso','Nota: El smartphone ha sido publicado con exito'); 
    }
    public function editarsp($Modelo){
        $phone=DB::table('smartphone')->where('MODELO_SP', $Modelo)->first();
        return view('EditaPhoneMP', compact('phone'));
    }
    public function actualizarsp(Request $req){
        $Editado = 'Editada 📖';
        DB::table('smartphone')->where('MODELO_SP',$req->Modelo)->update([
            'MODELO_SP'=>$req->Modelo,
            'MARCA_SP'=>$req->Marca,
            'ALMACENAMIENTO_SP'=>$req->Almacenamiento,
            'PANTALLA_SP'=>$req->Pantalla,
            'CAMARA_SP'=>$req->Camara,
            'BATERIA_SP'=>$req->Bateria,
            'REDES_SP'=>$req->Bandas,
            'PROCESADOR_SP'=>$req->Procesador,
            'SISTEMAOP_SP'=>$req->SistemaOp,
            'CONECTIVIDAD_SP'=>$req->Conectividad,
            'SENSORES_SP'=>$req->Sensores,
            'EDITADO_SP'=>$Editado
        ]);
        return back()->with('PAExitoso','Nota: El smartphone ha sido actualizado con exito');
    }
    public function borrarsp($Modelo){
        DB::table('smartphone')->where('MODELO_SP',$Modelo)->delete();
        return back()->with('PBExitoso','Nota: El smartphone ha sido borrado con exito');
    }
    public function vernot(){
        $noticias=DB::table('noticias')->get();
        return view('NoticiasMP',compact('noticias'));
    }
    public function crearnot(){
        return view('creanoticiaMP');        
    }
    public function insertarnot(Request $req){
        DB::table('noticias')->insert([
            'TITULO_NO'=>$req->Titulo,
            'CONTENIDO_NO'=>$req->Contenido,
            'FECHA_NO'=>$req->Fecha,
            'AUTOR_NO'=>$req->Autor
    ]);
    return back()->with('NIExitoso','Nota: La noticia ha sido publicada con exito'); 
    }
    public function reportarnot($ID_NO){
        $noticia=DB::table('noticias')->where('ID_NO', $ID_NO)->first();
        return view('EditaNoticia', compact('noticia'));   
    }
    public function insertarrep(Request $req){
        DB::table('reportes')->insert([
            'MOTIVO_RE'=>$req->Motivo,
            'ID_NO'=>$req->IDNoticia
    ]);
    return back()->with('ReporteExitoso','Nota: El reporte ha sido publicado con exito');
    }
	
	public function viewnews($ID_NO){
        $noticia=DB::table('noticias')->where('ID_NO', $ID_NO)->first();
		$reportes=DB::select('select * from reportes where ID_NO = ?',[$ID_NO]);
        return view('News', compact('noticia','reportes'));
    }
	
	public function viewsp($Modelo){
        $phone=DB::table('smartphone')->where('MODELO_SP', $Modelo)->first();
        return view('SmartPhone', compact('phone'));
    }
}