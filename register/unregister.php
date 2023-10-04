<?
require_once './function.php';
http_request('http://10.1.1.7:8500/v1/agent/service/deregister/order_service1',"PUT");
http_request('http://10.1.1.7:8500/v1/agent/service/deregister/product_service1',"PUT");
http_request('http://10.1.1.7:8500/v1/agent/service/deregister/product_service2',"PUT");
http_request('http://10.1.1.7:8500/v1/agent/service/deregister/payment_service1',"PUT");
?>