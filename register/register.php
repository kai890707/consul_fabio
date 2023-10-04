<?php 
require_once './function.php';

$serviceList = [
    '
        {
            "id":"product_service1",
            "name": "product_service",
            "tags": ["Anser","http_scheme=http","HTTP","product_service","urlprefix-/product_service strip=/product_service"],
            "address":"10.1.1.3",
            "port": 8081,
            "check": {
                "name": "product_service",
                "service_id": "product_service1",
                "http": "http://10.1.1.3:8081/api/v1/products",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"product_service2",
            "name": "product_service",
            "tags": ["Anser","http_scheme=http","HTTP","product_service","urlprefix-/product_service strip=/product_service"],
            "address":"10.1.1.2",
            "port": 8081,
            "check": {
                "name": "product_service",
                "service_id": "product_service2",
                "http": "http://10.1.1.2:8081/api/v1/products",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"order_service1",
            "name": "order_service",
            "tags": ["Anser","http_scheme=http","HTTP","order_service","urlprefix-/order_service strip=/order_service"],
            "address":"10.1.1.4",
            "port": 8082,
            "check": {
                "name": "order_service",
                "service_id": "order_service1",
                "http": "http://10.1.1.4:8082/api/v1/",
                "interval": "60s",
                "timeout": "5s"
            }
        }
    ',
    '
        {
            "id":"payment_service1",
            "name": "payment_service",
            "tags": ["Anser","http_scheme=http","HTTP","payment_service","urlprefix-/payment_service strip=/payment_service"],
            "address":"10.1.1.5",
            "port": 8083,
            "check": {
                "name": "payment_service",
                "service_id": "payment_service1",
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