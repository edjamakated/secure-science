<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabNote Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                LabNote Dashboard
            </h1>
        </div>
    </header>
    <nav class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="projects.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Project Management</a>
                    <a href="samples.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Sample Management</a>
                    <a href="inventory.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Inventory Management</a>
                    <a href="protocols.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Protocol Management</a>
                    <a href="experiments.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Experiment Logging</a>
                </div>
                <div class="flex items-center">
                    <a href="settings.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Settings</a>
                    <a href="logout.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace this part with your dashboard content -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Welcome to LabNote Dashboard
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Here, you can view ongoing experiments, upcoming tasks, and recent updates.
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
