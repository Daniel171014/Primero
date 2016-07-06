<?php
require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/PersonaBEAN.php';

class PersonaDAO 
{
    public function ListarPersonas()
    {
        try 
        { $sql="select * from persona;";
            $objc=new ConexionBD();
            $cn= $objc->getConexionBD();
            $rs=  mysql_query( $sql,$cn);
            $LISTA['PERSONA']=array();
            while ($fila= mysql_fetch_assoc($rs))
            {
                array_push($LISTA['PERSONA'],array('codperso'=>$fila['codperso'],'nombperso'=>$fila['nombperso'],'apelliperso'=>$fila['apelliperso']));
            }
            
        } catch (Exception $ex) 
        {
            
        }
        return $LISTA;
    }
    
    
    
}
?>