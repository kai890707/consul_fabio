<?php 
require_once './function.php';

$serviceList = [
    '
        {
            "id":"Product-Service1",
            "name": "Product-Service",
            "tags": ["Anser","http_scheme=http","HTTP","ProductService","urlprefix-/ProductService strip=/ProductService"],
            "address":"10.1.1.3",
            "port": 8081,
            "check": {
                "name": "Product-Service",
                "service_id": "Product-Service1",
                "http": "http://10.1.1.3:8081/api/v1/products",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"Product-Service2",
            "name": "Product-Service",
            "tags": ["Anser","http_scheme=http","HTTP","ProductService","urlprefix-/ProductService strip=/ProductService"],
            "address":"10.1.1.2",
            "port": 8081,
            "check": {
                "name": "Product-Service",
                "service_id": "Product-Service2",
                "http": "http://10.1.1.2:8081/api/v1/products",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"Order-Service1",
            "name": "Order-Service",
            "tags": ["Anser","http_scheme=http","HTTP","OrderService","urlprefix-/OrderService strip=/OrderService"],
            "address":"10.1.1.4",
            "port": 8082,
            "check": {
                "name": "Order-Service",
                "service_id": "Order-Service1",
                "http": "http://10.1.1.4:8082/api/v1/",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"Payment-Service1",
            "name": "Payment-Service",
            "tags": ["Anser","http_scheme=http","HTTP","PaymentService","urlprefix-/PaymentService strip=/PaymentService"],
            "address":"10.1.1.5",
            "port": 8083,
            "check": {
                "name": "Payment-Service",
                "service_id": "Payment-Service1",
                "http": "http://10.1.1.5:8083/api/v1/",
                "interval": "10s",
                "timeout": "5s"
            }
        }
    '
];

foreach ($serviceList as $key) {
    http_request('http://10.1.1.7:8500/v1/agent/service/register',"PUT",$key);
    
}
?>