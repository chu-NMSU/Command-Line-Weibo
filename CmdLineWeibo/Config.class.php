<?phpclass Config{  static private $instance = null;  private $parameters = array();    private function __construct(array $parameters = array())  {    $this->parameters = $parameters;      }    static public function getInstance()  {    if (!is_null(self::$instance))    {      self::$instance = new self();    }        return self::$instance;  }  public function setParameter($key, $value)  {    $this->parameters[$key] = $value;        return $this;  }      public function getParameter($key)  {    if (!array_key_exists($key, $this->parameters))    {      return null;    }        return $this->parameters[$key];  }    final public function __clone()  {    throw new Exception('Clone instances of this class is forbidden');  }    final public function __wakeup()  {    throw new Exception('Unserializing instances of this class is forbidden');  }    }