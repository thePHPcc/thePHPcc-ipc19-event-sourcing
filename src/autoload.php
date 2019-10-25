<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'eventsourcing\\billingaddress' => '/BillingAddress.php',
                'eventsourcing\\billingaddressdefinedevent' => '/BillingAddressDefinedEvent.php',
                'eventsourcing\\cartitem' => '/domain/CartItem.php',
                'eventsourcing\\cartitemcollection' => '/domain/CartItemCollection.php',
                'eventsourcing\\cartnotfoundexception' => '/domain/CartNotFoundException.php',
                'eventsourcing\\cartservice' => '/CartService.php',
                'eventsourcing\\checkout' => '/Checkout.php',
                'eventsourcing\\checkoutservice' => '/CheckoutService.php',
                'eventsourcing\\checkoutstartedevent' => '/CheckoutStartedEvent.php',
                'eventsourcing\\event' => '/Event.php',
                'eventsourcing\\eventdispatcher' => '/EventDispatcher.php',
                'eventsourcing\\eventlistener' => '/EventListener.php',
                'eventsourcing\\eventlog' => '/EventLog.php',
                'eventsourcing\\eventreader' => '/EventReader.php',
                'eventsourcing\\eventsourced' => '/EventSourced.php',
                'eventsourcing\\eventwriter' => '/EventWriter.php',
                'eventsourcing\\filesystemeventreader' => '/FileSystemEventReader.php',
                'eventsourcing\\filesystemeventwriter' => '/FileSystemEventWriter.php',
                'eventsourcing\\mail' => '/domain/Mail.php',
                'eventsourcing\\mailservice' => '/MailService.php',
                'eventsourcing\\myfirsteventlistener' => '/MyFirstEventListener.php',
                'eventsourcing\\sessionid' => '/domain/SessionId.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
