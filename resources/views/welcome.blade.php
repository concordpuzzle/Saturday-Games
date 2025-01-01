<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Saturday</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Faculty+Glyphic&family=Orelega+One&family=Ultra&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/1373d7f0f5.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: "Orelega One", serif;        
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }
    .grid-item {
        width: 100px;
        height: 100px;
        background-color: #fff;
        border:5px solid #b71540;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 16px;
    }
    .white-22{
        color:#b71540;
        font-size: 33px;
        padding-top:10px;
    }
    .logo {

        font-family: "Ultra", serif;
  font-weight: 400;
  font-style: normal;
  color:#b71540;
    }
    .arvo-bold {
  font-family: "Arvo", serif;
  font-weight: 700;
  font-style: normal;
  color:#b71540;
  text-align: center;
  font-size: 17px;

}
</style>
</head>
<body>
    <div class="min-h-screen bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto">
            <div class="container mx-auto px-4">
                <div class="px-4 py-2">
                    <h1 class="text-left text-2xl" style="color: #009432; font-size: 33px;">Greenfield</h1>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Text and Website Input Box -->
                    <div class="bg-white border border-gray-300 p-4 rounded shadow-sm">
                        <h3 class="text-lg font-semibold mb-2">Source Material</h3>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="contentDetails" class="block text-gray-700 font-bold mb-2">Content/Details:</label>
                                <textarea name="contentDetails" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter content or details here" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="websiteInput" class="block text-gray-700 font-bold mb-2">Webpage:</label>
                                <input type="url" name="websiteInput" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="https://example.com">
                            </div>
                            <div class="mb-4">
                                <label for="documentUpload" class="block text-gray-700 font-bold mb-2">Upload Document:</label>
                                <input type="file" name="documentUpload" class="w-full text-gray-700 p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            </div>
                        </form>
                    </div>
                    <!-- Option Buttons -->
                    <div class="bg-white border border-gray-300 p-4 rounded shadow-sm">
                        <h3 class="text-lg font-semibold mb-2">Predefined Intents</h3>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Choose an intent:</label>
                            <div class="flex flex-col space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="intent" value="invitations" class="form-radio text-blue-600">
                                    <span class="ml-2">Solicit invitations or signups (e.g., webinars, events)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="intent" value="sales" class="form-radio text-blue-600">
                                    <span class="ml-2">Increase online sales or donations</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="intent" value="news" class="form-radio text-blue-600">
                                    <span class="ml-2">Announce news or updates</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="intent" value="engagement" class="form-radio text-blue-600">
                                    <span class="ml-2">Build brand engagement</span>
                                </label>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Customizable Actions</h3>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Select preferred tone:</label>
                            <select name="tone" class="form-select mt-1 block w-full border-gray-300 rounded">
                                <option value="formal">Formal</option>
                                <option value="casual">Casual</option>
                                <option value="playful">Playful</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Add urgency options:</label>
                            <div class="flex flex-col space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="urgency[]" value="limited_time" class="form-checkbox text-blue-600">
                                    <span class="ml-2">Limited Time Offer</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="urgency[]" value="sign_up_today" class="form-checkbox text-blue-600">
                                    <span class="ml-2">Sign Up Today!</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>