<?php
 /*
 Plugin Name: Bangla Quotes
 Plugin URI: http://example.com/wordpress-plugins/bangla-quotes
 Description: A Collections of Bangla Quotes From A P J Abul Kalam
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com
 License: GPLv2
 */

function bq_get_quotes() {
	/** These are the lyrics to Hello Dolly */
    $quotes=[
        "“স্বপ্ন বাস্তবায়ন না হওয়া পর্যন্ত তোমাকে স্বপ্ন দেখে যেতে হবে” – Abdul Kalam",
        "“স্বপ্ন সেটা নয় যেটা তুমি ঘুমিয়ে ঘুমিয়ে দেখো | স্বপ্ন হলো সেটাই যা পূরণের অদম্য ইচ্ছা তোমায় ঘুমাতে দেবে না” – Abdul Kalam",
        "“একটা কথা পরিষ্কার, সৃষ্টিকর্তা তাদেরই সহায় থাকেন, যারা কঠোর পরিশ্রম করেন” – Abdul Kalam",
        "“যদি সূর্যের মতো উজ্জ্বল হতে চাও, তাহলে তোমাকেই প্রথমে সূর্যের মত পুড়তে হবে” – Abdul Kalam",
        "“সফলতার গল্পে কেবল একটা বার্তা থাকে কিন্তু ব্যর্থতার গল্পে সফল হওয়ার উপায় থাকে” – Abdul Kalam",
        "“স্বপ্ন দেখতে হবে, স্বপ্ন থেকেই চিন্তার জন্ম হয় আর চিন্তা জন্ম দেয় কাজের” – Abdul Kalam ",
        "“আমরা শুধু সাফল্যের উপরই গড়ি না, আমরা অসফলতার উপরেও গড়ি” – Abdul Kalam",
        "“জটিল কাজে বেশি আনন্দ পাওয়া যায়, তাই সফলতার আনন্দ পাওয়ার জন্য মানুষের কাজ জটিল হওয়া উচিত” – Abdul Kalam",
        "“ব্যর্থতা নামক রোগের সবথেকে ভালো অসুধ হলো আত্মবিশ্বাস আর কঠোর পরিশ্রম, এটা আপনাকে একজন সফল মানুষ করে তুলবে” – Abdul Kalam ",
        "“নির্দিষ্ট লক্ষ্য, ক্রমাগত জ্ঞান সঞ্চয় করা, কঠোর পরিশ্রম ও হার না মানা মনোভাব – এই চারটি জিনিস মেনে চললে যেকোনো কিছুকেই লাভ করা যেতে পারে” – Abdul Kalam"
        ];

	// And then randomly choose a line.
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function bangla_quotes() {
	$chosen = bq_get_quotes();
	
	printf(	$chosen );
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'display_bangla_quotes', 'bangla_quotes' );