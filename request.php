<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Request Shortcode</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Request Shortcode</h2>
    <form method="POST" class="space-y-4">
        <input type="text" name="admin_name" placeholder="Your Name" required
               class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="email" name="admin_email" placeholder="Your Email" required
               class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="text" name="organization" placeholder="Organization (optional)"
               class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="text" name="contact_number" placeholder="Contact Number" required
               class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition duration-200">
                Submit Request
        </button>
    </form>
</div>
</body>
</html>
