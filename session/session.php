<?php 
/*
=> যে ফাইলের ভিতর সেশান এর মান সেট করা আছে ওই ফাইল যখন রান করা হবে তখন অই নাম এর মান টা ব্রাউজারে সেট হয়ে যাবে।
সেশান শুরু করলে ব্রাউজারে ডাটা সেভ হয়ে যায় । এবং ওই ডাটা টা ততক্ষন পর্যন্ত থাকবে যাতক্ষন পর্যন্ত সেশান ডেসট্রই (ব্রাউজার ক্লোজ/ম্যনুয়ালি ডেসট্রই ফাংশন ইউস) না হচ্ছে

=> সেশন হলো ভ্যারিয়েবলের মধ্যে তথ্য সংরক্ষণ করার একটি উপায় যা একাধিক পেজে ব্যবহার করা যায়।
এই তথ্য গুলো ব্যবহারকারীর কম্পিউটারে সংরক্ষিত হয় না, বরং সার্ভারে সংরক্ষিত হয়।


উদাহরনঃ ( লগিন এর ক্ষেত্রে বেশি কাজে লাগে )
=> মনে করেন, ব্রাউজার ওপেন করলাম তখন সেশান শুরু হলো আবার ব্রাউজার কেটে দিলাম সেশান ডেসট্রই হয়ে গেল
=> সাপোস একটা সফট্যার ( সাবলাইম টেক্সট ) ওপেন করলাম তখন সেশান শুরু হইল আবার যখন সাবলাইম টেক্সট কেটে দিবো তখন সেশান ডেসট্রই হয়ে গেছে 

সেশান কাজ করে কিভাবেঃ
=> যতক্ষন সেশান টা চলবে ততক্ষন আমরা যতগুলা ফাইল ব্রাউজ করবো ,সব ফাইলে ডাটা চলে যাবে (সব ফাইল থেকে ডাটা টা ব্রাউজ করা যাবে )
*/

session_start();

echo $_SESSION['name'] = "Pobitro Raj"."<br>";
echo $_SESSION['pro'] = "PHP Developer"."<pre>";

print_r($_SESSION);
