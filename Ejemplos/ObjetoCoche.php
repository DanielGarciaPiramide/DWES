
class Coche {
        
        public $matricula;
        public $marca;
        public $modelo;
        public $km;


        function _constructor($matricula,$marca,$modelo,$km){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->km = $km;

        }
        function get_matricula() {
          return $this->matricula;
        }
        function get_marca() {
            return $this->marca;
        }
        function get_modelo() {
            return $this->modelo;
        }
        function get_km() {
            return $this->km;
        }
      }

