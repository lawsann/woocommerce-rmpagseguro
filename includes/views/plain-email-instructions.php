<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! isset( $data['type'] ) ) {
	return;
}

_e( 'Payment', 'woocommerce-pagseguro' );

echo "\n\n";

if ( 2 == $data['type'] ) {

	_e( 'Please use the link below to view your Banking Ticket, you can print and pay in your internet banking or in a lottery retailer:', 'woocommerce-pagseguro' );

	echo "\n";

	echo esc_url( $data['link'] );

	echo "\n";

	_e( 'After we receive the ticket payment confirmation, your order will be processed.', 'woocommerce-pagseguro' );

} elseif ( 3 == $data['type'] ) {

	_e( 'Please use the link below to make the payment in your bankline:', 'woocommerce-pagseguro' );

	echo "\n";

	echo esc_url( $data['link'] );

	echo "\n";

	_e( 'After we receive the confirmation from the bank, your order will be processed.', 'woocommerce-pagseguro' );

} else {

	echo sprintf( __( 'You just made the payment in %s using the %s.', 'woocommerce-pagseguro' ), $data['installments'] . 'x', $data['method'] );

	echo "\n";

	_e( 'As soon as the credit card operator confirm the payment, your order will be processed.', 'woocommerce-pagseguro' );

}

echo "\n\n****************************************************\n\n";