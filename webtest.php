<?php
// --- SERVER-SIDE DATA CONFIGURATION ---

// Team Data
$teamMembers = [
    [
        "name" => "Joseph Yewlett",
        "role" => "Team Leader & Frontend",
        "email" => "joseph.yewlett@icloud.com",
        "discord" => "jyewlett",
        "icon" => "fa-user-astronaut"
    ],
    [
        "name" => "Lina Tlemcani",
        "role" => "Data Science Lead",
        "email" => "lr921@ic.ac.uk",
        "discord" => "cinnamonroll25",
        "icon" => "fa-chart-network"
    ],
    [
        "name" => "Ying Wang",
        "role" => "Enterprise & Client Focus",
        "email" => "yingwang.vivian@gmail.com",
        "discord" => "Ying_W",
        "icon" => "fa-briefcase"
    ],
    [
        "name" => "Harshit Satsangi",
        "role" => "Coded Solution & MCP Lead",
        "email" => "hs2125@ic.ac.uk",
        "discord" => "hs07_77461",
        "icon" => "fa-code-branch"
    ]
];

// Tech Stack Data
$techStack = [
    "AI Core" => "Claude Sonnet & MCP Orchestrator",
    "Protocol" => "Beckn (Discovery & Transaction)",
    "Data Sources" => "National Grid ESO, Elexon BMRS",
    "Backend" => "PHP on Google Cloud Compute",
    "Optimization" => "Linear Programming (Short-horizon)"
];

// Impact Stats (Mock Data for Display)
$impactStats = [
    ["label" => "Grid Stability", "value" => "98%", "color" => "text-emerald-400"],
    ["label" => "Compute Deferral", "value" => "4.2 MW", "color" => "text-blue-400"],
    ["label" => "Carbon Reduced", "value" => "-15%", "color" => "text-teal-400"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synapse Energy | Agentic Grid Orchestration</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Space Grotesk', sans-serif; }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111827; }
        ::-webkit-scrollbar-thumb { background: #059669; border-radius: 4px; }

        /* Animations */
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 15px rgba(16, 185, 129, 0.1); }
            50% { box-shadow: 0 0 30px rgba(16, 185, 129, 0.3); }
        }
        .animate-pulse-glow { animation: pulse-glow 3s infinite; }

        .glass-panel {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bg-grid-pattern {
            background-image: radial-gradient(rgba(5, 150, 105, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-100 selection:bg-emerald-500 selection:text-white overflow-x-hidden">

    <!-- BACKGROUND EFFECTS -->
    <div class="fixed inset-0 z-0 bg-grid-pattern pointer-events-none"></div>
    <div class="fixed top-0 right-0 w-96 h-96 bg-emerald-600/20 rounded-full blur-[120px] -z-10"></div>
    <div class="fixed bottom-0 left-0 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px] -z-10"></div>

    <!-- NAVBAR -->
    <nav class="fixed w-full z-50 border-b border-gray-800 bg-gray-950/80 backdrop-blur-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-bolt text-emerald-400 text-2xl"></i>
                <span class="text-xl font-bold tracking-wider">SYNAPSE<span class="text-emerald-400">ENERGY</span></span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-400">
                <a href="#dashboard" class="hover:text-white transition">Live Dashboard</a>
                <a href="#architecture" class="hover:text-white transition">Architecture</a>
                <a href="#team" class="hover:text-white transition">Team</a>
            </div>
            <button class="px-5 py-2 bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-bold rounded-full transition shadow-lg shadow-emerald-500/20">
                Connect Grid
            </button>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative pt-40 pb-20 z-10">
        <div class="container mx-auto px-6 text-center">
            <div class="inline-block px-4 py-1 mb-6 rounded-full bg-gray-900 border border-gray-700 text-xs font-mono text-emerald-400 animate-bounce">
                <i class="fa-solid fa-circle text-[8px] mr-2 align-middle"></i>System Operational
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-gray-200 to-gray-500">
                Compute-Energy<br>Convergence
            </h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-10">
                Orchestrating grid-scale demand flexibility with Agentic AI. 
                Transforming data centers into dynamic energy assets using the Beckn protocol.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#dashboard" class="px-8 py-4 bg-white text-gray-900 rounded-lg font-bold hover:bg-gray-100 transition flex items-center justify-center gap-2">
                    View Live Agent <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#architecture" class="px-8 py-4 glass-panel text-white rounded-lg font-bold hover:bg-gray-800 transition">
                    Read Architecture
                </a>
            </div>
        </div>
    </section>

    <!-- LIVE DASHBOARD SIMULATION -->
    <section id="dashboard" class="py-20 z-10 relative">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold">Synapse Real-Time Ops</h2>
                    <p class="text-gray-400">Live optimization of compute loads vs. grid frequency.</p>
                </div>
                <div class="text-right hidden md:block">
                    <div class="text-sm text-gray-500">Current Time (London)</div>
                    <div class="text-xl font-mono text-emerald-400"><?php echo date('H:i:s T'); ?></div>
                </div>
            </div>

            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Chart Card -->
                <div class="lg:col-span-2 glass-panel rounded-2xl p-6 animate-pulse-glow">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-gray-200"><i class="fa-solid fa-chart-line text-emerald-400 mr-2"></i>Load Shifting</h3>
                        <span class="text-xs bg-gray-800 px-2 py-1 rounded text-gray-400">Live Telemetry</span>
                    </div>
                    <div class="h-64 w-full">
                        <canvas id="loadChart"></canvas>
                    </div>
                </div>

                <!-- Terminal / Log Card -->
                <div class="glass-panel rounded-2xl p-6 flex flex-col h-[380px]">
                    <div class="flex justify-between items-center mb-4 border-b border-gray-700 pb-2">
                        <h3 class="font-bold text-gray-200"><i class="fa-solid fa-terminal text-blue-400 mr-2"></i>Agent Logs</h3>
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-ping"></span>
                    </div>
                    <div class="font-mono text-xs space-y-2 overflow-y-auto flex-1 text-gray-400" id="systemLogs">
                        <!-- Logs will be injected by JS -->
                        <div class="text-emerald-500">[Orchestrator] System initialized.</div>
                        <div class="text-gray-500">[Beckn] Searching for DER providers...</div>
                    </div>
                </div>

                <!-- Stat Cards -->
                <?php foreach($impactStats as $stat): ?>
                <div class="glass-panel rounded-xl p-6 text-center hover:bg-gray-800/50 transition duration-300">
                    <div class="text-sm text-gray-500 uppercase tracking-widest mb-1"><?= $stat['label'] ?></div>
                    <div class="text-3xl font-bold <?= $stat['color'] ?>"><?= $stat['value'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ARCHITECTURE & WORKFLOW -->
    <section id="architecture" class="py-20 bg-gray-900/50 border-y border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">The Synapse Architecture</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Powered by Claude Sonnet, coordinating MCP tools and PHP Backend controllers via the Beckn protocol.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 border border-gray-800 rounded-xl bg-gray-950 hover:border-emerald-500/50 transition group">
                    <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-brain text-emerald-400 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">AI Orchestrator</h3>
                    <p class="text-sm text-gray-400">Claude Sonnet agent manages tool calls, timeouts, and regulatory audits via MCP.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 border border-gray-800 rounded-xl bg-gray-950 hover:border-blue-500/50 transition group">
                    <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-network-wired text-blue-400 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Beckn Protocol</h3>
                    <p class="text-sm text-gray-400">Decentralized discovery of DER providers based on location and capacity.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 border border-gray-800 rounded-xl bg-gray-950 hover:border-purple-500/50 transition group">
                    <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-server text-purple-400 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Compute Arbriage</h3>
                    <p class="text-sm text-gray-400">Shifting AI training loads to low-cost, low-carbon windows automatically.</p>
                </div>

                <!-- Feature 4 -->
                <div class="p-6 border border-gray-800 rounded-xl bg-gray-950 hover:border-orange-500/50 transition group">
                    <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-file-shield text-orange-400 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">P415 Compliance</h3>
                    <p class="text-sm text-gray-400">Ensuring transparency and fairness in flexibility markets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section id="team" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Meet the Team</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach($teamMembers as $member): ?>
                <div class="glass-panel rounded-xl p-6 text-center group hover:-translate-y-2 transition duration-300">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-gray-800 to-black rounded-full flex items-center justify-center mb-4 border border-gray-700 group-hover:border-emerald-500 transition">
                        <i class="fa-solid <?= $member['icon'] ?> text-3xl text-gray-400 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white"><?= $member['name'] ?></h3>
                    <p class="text-emerald-400 text-sm mb-4"><?= $member['role'] ?></p>
                    
                    <div class="flex justify-center gap-3 opacity-60 group-hover:opacity-100 transition">
                        <a href="mailto:<?= $member['email'] ?>" class="hover:text-emerald-400" title="Email"><i class="fa-solid fa-envelope"></i></a>
                        <a href="#" class="hover:text-indigo-400" title="Discord: <?= $member['discord'] ?>"><i class="fa-brands fa-discord"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-950 border-t border-gray-900 py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="flex items-center justify-center gap-2 mb-4">
                <i class="fa-solid fa-bolt text-emerald-500"></i>
                <span class="font-bold text-xl text-white">SYNAPSE ENERGY</span>
            </div>
            <p class="text-gray-500 text-sm mb-6">Imperial College London Team Submission</p>
            <div class="text-xs text-gray-600">
                &copy; <?= date('Y') ?> Synapse Energy. Released under MIT Commons License.<br>
                Submitted to Dora Hacks.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // --- 1. CHART.JS CONFIGURATION ---
        const ctx = document.getElementById('loadChart').getContext('2d');
        
        // Create gradients
        let gradientSupply = ctx.createLinearGradient(0, 0, 0, 400);
        gradientSupply.addColorStop(0, 'rgba(16, 185, 129, 0.5)'); // Emerald
        gradientSupply.addColorStop(1, 'rgba(16, 185, 129, 0.0)');

        let gradientDemand = ctx.createLinearGradient(0, 0, 0, 400);
        gradientDemand.addColorStop(0, 'rgba(59, 130, 246, 0.5)'); // Blue
        gradientDemand.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

        const loadChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['10:00', '10:15', '10:30', '10:45', '11:00', '11:15', 'Now'],
                datasets: [{
                    label: 'Grid Renewable Supply',
                    data: [65, 70, 68, 75, 80, 85, 82],
                    borderColor: '#10b981',
                    backgroundColor: gradientSupply,
                    tension: 0.4,
                    fill: true
                }, {
                    label: 'Data Center Load',
                    data: [40, 45, 60, 55, 50, 40, 35], // Dips when supply is high (simulating logic)
                    borderColor: '#3b82f6',
                    backgroundColor: gradientDemand,
                    borderDash: [5, 5],
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { labels: { color: '#9ca3af' } }
                },
                scales: {
                    y: { 
                        grid: { color: '#374151' },
                        ticks: { color: '#9ca3af' } 
                    },
                    x: { 
                        grid: { display: false },
                        ticks: { color: '#9ca3af' } 
                    }
                },
                animation: { duration: 1000 }
            }
        });

        // --- 2. SIMULATION LOOP ---
        const logsContainer = document.getElementById('systemLogs');
        const logs = [
            { msg: "[National Grid] Frequency deviation detected: 49.98Hz", type: "text-yellow-500" },
            { msg: "[MCP Agent] Analyzing flexibility options...", type: "text-blue-400" },
            { msg: "[Beckn] Broadcast: search_flexibility (loc: London, cap: 2MW)", type: "text-gray-400" },
            { msg: "[Beckn] Response: 3 Providers found.", type: "text-emerald-500" },
            { msg: "[Optimization] Linear Program solved. Objective: Minimize Cost.", type: "text-purple-400" },
            { msg: "[Control] Dispatch signal sent: Reduce non-critical AI training.", type: "text-red-400" },
            { msg: "[Audit] Transaction logged: ID #8821X (P415 Compliance)", type: "text-gray-500" }
        ];

        let logIndex = 0;

        function addLog() {
            const log = logs[logIndex];
            const div = document.createElement('div');
            const time = new Date().toLocaleTimeString([], {hour12: false});
            div.className = `${log.type} animate-pulse`;
            div.innerHTML = `<span class="text-gray-600 mr-2">[${time}]</span> ${log.msg}`;
            
            logsContainer.appendChild(div);
            logsContainer.scrollTop = logsContainer.scrollHeight;

            logIndex = (logIndex + 1) % logs.length;
        }

        // Simulate live updates
        setInterval(() => {
            // Update Chart Data (Random walk)
            const newSupply = Math.floor(Math.random() * (90 - 70 + 1)) + 70;
            const newDemand = Math.floor(Math.random() * (50 - 30 + 1)) + 30;
            
            // Shift arrays
            loadChart.data.labels.push(new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
            loadChart.data.labels.shift();
            loadChart.data.datasets[0].data.push(newSupply);
            loadChart.data.datasets[0].data.shift();
            loadChart.data.datasets[1].data.push(newDemand);
            loadChart.data.datasets[1].data.shift();
            loadChart.update();

        }, 3000); // Chart updates every 3s

        setInterval(addLog, 2500); // Logs update every 2.5s

    </script>
</body>
</html>