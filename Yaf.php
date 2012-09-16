<?php
/**
 * 
 * @copyright	test
 * @version
 * @date	
 */
final class Yaf_Application{

	protected static $_app = '';

	protected $config = '';

	protected $dispatcher = '';

	protected $_modules = '';

	protected $_running = '';

	protected $_environ = 'product';

	protected $_err_no = '0';

	protected $_err_msg = '';
	public function __construct(){
			var_dump('sdfdsf');
			exi;

	}
	public function __construct ($config,$envrion) {
	}
	public function run () {
	}
	public function execute ($entry,$parameters) {
	}
	public static function app () {
	}
	public function environ () {
	}
	public function bootstrap ($bootstrap) {
	}
	public function getConfig () {
	}
	public function getModules () {
	}
	public function getDispatcher () {
	}
	public function getLastErrorNo () {
	}
	public function getLastErrorMsg () {
	}
	public function clearLastError () {
	}
	public function __destruct () {
	}
	private function __clone () {
	}
	private function __sleep () {
	}
	private function __wakeup () {
	}
}
abstract class Yaf_Bootstrap_Abstract{
}
final class Yaf_Dispatcher{

	protected static $_instance = '';

	protected $_router = '';

	protected $_view = '';

	protected $_request = '';

	protected $_plugins = '';

	protected $_auto_render = '1';

	protected $_return_response = '';

	protected $_instantly_flush = '';

	protected $_default_module = '';

	protected $_default_controller = '';

	protected $_default_action = '';
	private function __construct () {
	}
	private function __clone () {
	}
	private function __sleep () {
	}
	private function __wakeup () {
	}
	public function enableView () {
	}
	public function disableView () {
	}
	public function initView ($templates_dir,$options) {
	}
	public function setView ($view) {
	}
	public function setRequest ($request) {
	}
	public function getApplication () {
	}
	public function getRouter () {
	}
	public function getRequest () {
	}
	public function setErrorHandler ($callback,$error_types) {
	}
	public function setAppDirectory ($directory) {
	}
	public function setDefaultModule ($module) {
	}
	public function setDefaultController ($controller) {
	}
	public function setDefaultAction ($action) {
	}
	public function returnResponse ($flag) {
	}
	public function autoRender ($flag) {
	}
	public function flushInstantly ($flag) {
	}
	public static function getInstance () {
	}
	public function dispatch ($request) {
	}
	public function throwException ($flag) {
	}
	public function catchException ($flag) {
	}
	public function registerPlugin ($plugin) {
	}
}
final class Yaf_Loader{

	protected static $_instance = '';

	protected $_local_ns = '';

	protected $_library = '';

	protected $_global_library = '';
	private function __construct () {
	}
	private function __clone () {
	}
	private function __sleep () {
	}
	private function __wakeup () {
	}
	public function autoload () {
	}
	public static function getInstance () {
	}
	public function registerLocalNamespace () {
	}
	public function getLocalNamespace () {
	}
	public function clearLocalNamespace () {
	}
	public function isLocalName () {
	}
	public static function import () {
	}
}
abstract class Yaf_Request_Abstract{
	Const SCHEME_HTTP = 'http';
	Const SCHEME_HTTPS = 'https';

	public $module = '';

	public $controller = '';

	public $action = '';

	public $method = '';

	protected $params = '';

	protected $language = '';

	protected $_exception = '';

	protected $_base_uri = '';

	protected $uri = '';

	protected $dispatched = '';

	protected $routed = '';
	public function isGet () {
	}
	public function isPost () {
	}
	public function isPut () {
	}
	public function isHead () {
	}
	public function isOptions () {
	}
	public function isCli () {
	}
	public function isXmlHttpRequest () {
	}
	public function getServer ($name,$default) {
	}
	public function getEnv ($name,$default) {
	}
	public function setParam ($name,$value) {
	}
	public function getParam ($name,$default) {
	}
	public function getParams () {
	}
	public function getException () {
	}
	public function getModuleName () {
	}
	public function getControllerName () {
	}
	public function getActionName () {
	}
	public function setModuleName ($module) {
	}
	public function setControllerName ($controller) {
	}
	public function setActionName ($action) {
	}
	public function getMethod () {
	}
	public function getLanguage () {
	}
	public function setBaseUri ($uir) {
	}
	public function getBaseUri () {
	}
	public function getRequestUri () {
	}
	public function setRequestUri ($uir) {
	}
	public function isDispatched () {
	}
	public function setDispatched () {
	}
	public function isRouted () {
	}
	public function setRouted ($flag) {
	}
}
class Yaf_Request_Http extends Yaf_Request_Abstract{

	public $module = '';

	public $controller = '';

	public $action = '';

	public $method = '';

	protected $params = '';

	protected $language = '';

	protected $_exception = '';

	protected $_base_uri = '';

	protected $uri = '';

	protected $dispatched = '';

	protected $routed = '';
	public function getQuery () {
	}
	public function getRequest () {
	}
	public function getPost () {
	}
	public function getCookie () {
	}
	public function getFiles () {
	}
	public function get () {
	}
	public function isXmlHttpRequest () {
	}
	public function __construct () {
	}
	private function __clone () {
	}
	public function isGet () {
	}
	public function isPost () {
	}
	public function isPut () {
	}
	public function isHead () {
	}
	public function isOptions () {
	}
	public function isCli () {
	}
	public function getServer ($name,$default) {
	}
	public function getEnv ($name,$default) {
	}
	public function setParam ($name,$value) {
	}
	public function getParam ($name,$default) {
	}
	public function getParams () {
	}
	public function getException () {
	}
	public function getModuleName () {
	}
	public function getControllerName () {
	}
	public function getActionName () {
	}
	public function setModuleName ($module) {
	}
	public function setControllerName ($controller) {
	}
	public function setActionName ($action) {
	}
	public function getMethod () {
	}
	public function getLanguage () {
	}
	public function setBaseUri ($uir) {
	}
	public function getBaseUri () {
	}
	public function getRequestUri () {
	}
	public function setRequestUri ($uir) {
	}
	public function isDispatched () {
	}
	public function setDispatched () {
	}
	public function isRouted () {
	}
	public function setRouted ($flag) {
	}
}
final class Yaf_Request_Simple extends Yaf_Request_Abstract{
	Const SCHEME_HTTP = 'http';
	Const SCHEME_HTTPS = 'https';

	public $module = '';

	public $controller = '';

	public $action = '';

	public $method = '';

	protected $params = '';

	protected $language = '';

	protected $_exception = '';

	protected $_base_uri = '';

	protected $uri = '';

	protected $dispatched = '';

	protected $routed = '';
	public function __construct () {
	}
	private function __clone () {
	}
	public function getQuery () {
	}
	public function getRequest () {
	}
	public function getPost () {
	}
	public function getCookie () {
	}
	public function getFiles () {
	}
	public function get () {
	}
	public function isXmlHttpRequest () {
	}
	public function isGet () {
	}
	public function isPost () {
	}
	public function isPut () {
	}
	public function isHead () {
	}
	public function isOptions () {
	}
	public function isCli () {
	}
	public function getServer ($name,$default) {
	}
	public function getEnv ($name,$default) {
	}
	public function setParam ($name,$value) {
	}
	public function getParam ($name,$default) {
	}
	public function getParams () {
	}
	public function getException () {
	}
	public function getModuleName () {
	}
	public function getControllerName () {
	}
	public function getActionName () {
	}
	public function setModuleName ($module) {
	}
	public function setControllerName ($controller) {
	}
	public function setActionName ($action) {
	}
	public function getMethod () {
	}
	public function getLanguage () {
	}
	public function setBaseUri ($uir) {
	}
	public function getBaseUri () {
	}
	public function getRequestUri () {
	}
	public function setRequestUri ($uir) {
	}
	public function isDispatched () {
	}
	public function setDispatched () {
	}
	public function isRouted () {
	}
	public function setRouted ($flag) {
	}
}
abstract class Yaf_Response_Abstract{

	protected $_header = '';

	protected $_body = '';

	protected $_sendheader = '';
	public function __construct () {
	}
	public function __destruct () {
	}
	private function __clone () {
	}
	private function __toString () {
	}
	public function setBody () {
	}
	public function appendBody () {
	}
	public function prependBody () {
	}
	public function clearBody () {
	}
	public function getBody () {
	}
	public function setHeader () {
	}
	protected function setAllHeaders () {
	}
	public function getHeader () {
	}
	public function clearHeaders () {
	}
	public function setRedirect () {
	}
	public function response () {
	}
}
class Yaf_Response_Http extends Yaf_Response_Abstract{

	protected $_header = '';

	protected $_body = '';

	protected $_sendheader = '1';

	protected $_response_code = '200';
	public function __construct () {
	}
	public function __destruct () {
	}
	private function __clone () {
	}
	private function __toString () {
	}
	public function setBody () {
	}
	public function appendBody () {
	}
	public function prependBody () {
	}
	public function clearBody () {
	}
	public function getBody () {
	}
	public function setHeader () {
	}
	protected function setAllHeaders () {
	}
	public function getHeader () {
	}
	public function clearHeaders () {
	}
	public function setRedirect () {
	}
	public function response () {
	}
}
class Yaf_Response_Cli extends Yaf_Response_Abstract{

	protected $_header = '';

	protected $_body = '';

	protected $_sendheader = '';
	public function __construct () {
	}
	public function __destruct () {
	}
	private function __clone () {
	}
	private function __toString () {
	}
	public function setBody () {
	}
	public function appendBody () {
	}
	public function prependBody () {
	}
	public function clearBody () {
	}
	public function getBody () {
	}
	public function setHeader () {
	}
	protected function setAllHeaders () {
	}
	public function getHeader () {
	}
	public function clearHeaders () {
	}
	public function setRedirect () {
	}
	public function response () {
	}
}
abstract class Yaf_Controller_Abstract{

	public $actions = '';

	protected $_module = '';

	protected $_name = '';

	protected $_request = '';

	protected $_response = '';

	protected $_invoke_args = '';

	protected $_view = '';
	final protected function render ($tpl,$parameters) {
	}
	final protected function display ($tpl,$parameters) {
	}
	final public function getRequest () {
	}
	final public function getResponse () {
	}
	final public function getModuleName () {
	}
	final public function getView () {
	}
	final public function initView ($options) {
	}
	final public function setViewpath ($view_directory) {
	}
	final public function getViewpath () {
	}
	final public function forward ($module,$controller,$action,$paramters) {
	}
	final public function redirect ($url) {
	}
	final public function getInvokeArgs () {
	}
	final public function getInvokeArg ($name) {
	}
	final public function __construct () {
	}
	final private function __clone () {
	}
}
abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract{

	public $actions = '';

	protected $_module = '';

	protected $_name = '';

	protected $_request = '';

	protected $_response = '';

	protected $_invoke_args = '';

	protected $_view = '';

	protected $_controller = '';
	abstract public function execute () {
	}
	public function getController () {
	}
	final protected function render ($tpl,$parameters) {
	}
	final protected function display ($tpl,$parameters) {
	}
	final public function getRequest () {
	}
	final public function getResponse () {
	}
	final public function getModuleName () {
	}
	final public function getView () {
	}
	final public function initView ($options) {
	}
	final public function setViewpath ($view_directory) {
	}
	final public function getViewpath () {
	}
	final public function forward ($module,$controller,$action,$paramters) {
	}
	final public function redirect ($url) {
	}
	final public function getInvokeArgs () {
	}
	final public function getInvokeArg ($name) {
	}
	final public function __construct () {
	}
	final private function __clone () {
	}
}
abstract class Yaf_Config_Abstract{

	protected $_config = '';

	protected $_readonly = '1';
	abstract public function get () {
	}
	abstract public function set () {
	}
	abstract public function readonly () {
	}
	abstract public function toArray () {
	}
}
final class Yaf_Config_Ini extends Yaf_Config_Abstract{

	protected $_config = '';

	protected $_readonly = '1';
	public function __construct ($config_file,$section) {
	}
	public function __isset ($name) {
	}
	public function get ($name) {
	}
	public function set ($name,$value) {
	}
	public function count () {
	}
	public function rewind () {
	}
	public function current () {
	}
	public function next () {
	}
	public function valid () {
	}
	public function key () {
	}
	public function toArray () {
	}
	public function readonly () {
	}
	public function offsetUnset ($name) {
	}
	public function offsetGet ($name) {
	}
	public function offsetExists ($name) {
	}
	public function offsetSet ($name,$value) {
	}
	public function __get ($name) {
	}
	public function __set ($name,$value) {
	}
}
final class Yaf_Config_Simple extends Yaf_Config_Abstract{

	protected $_config = '';

	protected $_readonly = '';
	public function __construct ($config_file,$section) {
	}
	public function __isset ($name) {
	}
	public function get ($name) {
	}
	public function set ($name,$value) {
	}
	public function count () {
	}
	public function offsetUnset ($name) {
	}
	public function rewind () {
	}
	public function current () {
	}
	public function next () {
	}
	public function valid () {
	}
	public function key () {
	}
	public function readonly () {
	}
	public function toArray () {
	}
	public function __set ($name,$value) {
	}
	public function __get ($name) {
	}
	public function offsetGet ($name) {
	}
	public function offsetExists ($name) {
	}
	public function offsetSet ($name,$value) {
	}
}
Interface Yaf_View_Interface{
	abstract public function assign ($name,$value) {
	}
	abstract public function display ($tpl,$tpl_vars) {
	}
	abstract public function render ($tpl,$tpl_vars) {
	}
	abstract public function setScriptPath ($template_dir) {
	}
	abstract public function getScriptPath () {
	}
}
final class Yaf_View_Simple{

	protected $_tpl_vars = '';

	protected $_tpl_dir = '';
	public function __construct ($tempalte_dir,$options) {
	}
	public function __isset ($name) {
	}
	public function get ($name) {
	}
	public function assign ($name,$value) {
	}
	public function render ($tpl,$tpl_vars) {
	}
	public function display ($tpl,$tpl_vars) {
	}
	public function assignRef ($name,$value) {
	}
	public function setScriptPath ($template_dir) {
	}
	public function getScriptPath () {
	}
	public function __get ($name) {
	}
	public function __set ($name,$value) {
	}
}
final class Yaf_Router{

	protected $_routes = '';

	protected $_current = '';
	public function __construct () {
	}
	public function addRoute () {
	}
	public function addConfig () {
	}
	public function route () {
	}
	public function getRoute () {
	}
	public function getRoutes () {
	}
	public function getCurrentRoute () {
	}
}
Interface Yaf_Route_Interface{
	abstract public function route ($request) {
	}
}
class Yaf_Route_Static{
	public function match ($uri) {
	}
	public function route ($request) {
	}
	public function __construct () {
	}
	public function addRoute () {
	}
	public function addConfig () {
	}
	public function getRoute () {
	}
	public function getRoutes () {
	}
	public function getCurrentRoute () {
	}
}
final class Yaf_Route_Simple{

	protected $controller = '';

	protected $module = '';

	protected $action = '';
	public function __construct ($module_name,$controller_name,$action_name) {
	}
	public function route ($request) {
	}
}
final class Yaf_Route_Supervar{

	protected $_var_name = '';
	public function __construct ($supervar_name) {
	}
	public function route ($request) {
	}
}
final class Yaf_Route_Rewrite implements Yaf_Route_Interface{

	protected $_route = '';

	protected $_default = '';

	protected $_verify = '';
	public function __construct ($match,$route,$verify) {
	}
	public function route ($request) {
	}
}
final class Yaf_Route_Regex implements Yaf_Route_Interface{

	protected $_route = '';

	protected $_default = '';

	protected $_maps = '';

	protected $_verify = '';
	public function __construct ($match,$route,$map,$verify) {
	}
	public function route ($request) {
	}
}
final class Yaf_Route_Map{

	protected $_ctl_router = '';

	protected $_delimeter = '';
	public function __construct ($controller_prefer,$delimiter) {
	}
	public function route ($request) {
	}
}
abstract class Yaf_Plugin_Abstract{
	public function routerStartup ($request,$response) {
	}
	public function routerShutdown ($request,$response) {
	}
	public function dispatchLoopStartup ($request,$response) {
	}
	public function dispatchLoopShutdown ($request,$response) {
	}
	public function preDispatch ($request,$response) {
	}
	public function postDispatch ($request,$response) {
	}
	public function preResponse ($request,$response) {
	}
}
final class Yaf_Registry{

	protected static $_instance = '';

	protected $_entries = '';
	private function __construct () {
	}
	private function __clone () {
	}
	public static function get ($name) {
	}
	public static function has ($name) {
	}
	public static function set ($name,$value) {
	}
	public static function del ($name) {
	}
}
final class Yaf_Session{

	protected static $_instance = '';

	protected $_session = '';

	protected $_started = '';
	private function __construct () {
	}
	private function __clone () {
	}
	private function __sleep () {
	}
	private function __wakeup () {
	}
	public static function getInstance () {
	}
	public function start () {
	}
	public function get ($name) {
	}
	public function has ($name) {
	}
	public function set ($name,$value) {
	}
	public function del ($name) {
	}
	public function count () {
	}
	public function rewind () {
	}
	public function next () {
	}
	public function current () {
	}
	public function key () {
	}
	public function valid () {
	}
	public function offsetGet ($name) {
	}
	public function offsetSet ($name,$value) {
	}
	public function offsetExists ($name) {
	}
	public function offsetUnset ($name) {
	}
	public function __get ($name) {
	}
	public function __isset ($name) {
	}
	public function __set ($name,$value) {
	}
	public function __unset ($name) {
	}
}
class Yaf_Exception extends Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_StartupError extends Yaf_Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_RouterFailed extends Yaf_Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_DispatchFailed extends Yaf_Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_LoadFailed extends Yaf_Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_LoadFailed_Module extends Yaf_Exception_LoadFailed{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_LoadFailed_Controller extends Yaf_Exception_LoadFailed{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}
class Yaf_Exception_TypeError extends Yaf_Exception{

	protected $message = '';

	protected $code = '0';

	protected $file = '';

	protected $line = '';

	protected $previous = '';
	final private function __clone () {
	}
	public function __construct ($message,$code,$previous) {
	}
	final public function getMessage () {
	}
	final public function getCode () {
	}
	final public function getFile () {
	}
	final public function getLine () {
	}
	final public function getTrace () {
	}
	final public function getPrevious () {
	}
	final public function getTraceAsString () {
	}
	public function __toString () {
	}
}