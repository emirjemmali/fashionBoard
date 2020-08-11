<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payment.form.choose_payment_method_type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Form/ChoosePaymentMethodType.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/PluginController/PluginControllerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/PluginController/PluginController.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/PluginController/EntityPluginController.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Plugin/PluginInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Plugin/AbstractPlugin.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-paypal-bundle/JMS/Payment/PaypalBundle/Plugin/ExpressCheckoutPlugin.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-paypal-bundle/JMS/Payment/PaypalBundle/Client/Client.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-paypal-bundle/JMS/Payment/PaypalBundle/Client/Authentication/AuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-paypal-bundle/JMS/Payment/PaypalBundle/Client/Authentication/TokenAuthenticationStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/DataTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Form/Transformer/ChoosePaymentMethodTransformer.php';

$a = new \JMS\Payment\CoreBundle\PluginController\EntityPluginController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ['result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result', 'payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction', 'payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment', 'financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction', 'credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit'], ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
$a->addPlugin(new \JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin('http://127.0.0.1:8000/profile', 'http://127.0.0.1:8000', new \JMS\Payment\PaypalBundle\Client\Client(new \JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy('admin-facilitator_api1.derp6.com', 'U33NJEL9JZU62QVG', 'AtL7oQxTmzrw7-xA7-rku3v0ecLLAwABEnLS-y2G3yyj-n9ai5Mkr6t4'), true), NULL, NULL));

$this->privates['payment.form.choose_payment_method_type'] = $instance = new \JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType($a, ['paypal_express_checkout' => 'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType']);

$instance->setDataTransformer(new \JMS\Payment\CoreBundle\Form\Transformer\ChoosePaymentMethodTransformer());

return $instance;
