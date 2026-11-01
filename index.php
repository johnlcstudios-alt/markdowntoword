<?php
// index.php - Markdown to Word Converter following JohnLC Aura Design Philosophy
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown to Word | Aura Edition</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700;800&family=Inter:wght@300;400;500;600&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="aura-wrapper">
        <header class="aura-nav">
            <div class="nav-container">
                <div class="brand">
                    <div class="brand-logo">A</div>
                    <div class="brand-text">Markdown<span class="aura-highlight">toWord</span></div>
                </div>
                <div class="nav-tools">
                    <button id="themeToggle" class="theme-switch">
                        <span class="sun">☀️</span>
                        <span class="moon">🌙</span>
                    </button>
                    <a href="#" class="nav-link">Framework</a>
                    <a href="#" class="nav-link btn-aura">Get Started</a>
                </div>
            </div>
        </header>

        <main>
            <section class="aura-hero">
                <div class="hero-content">
                    <div class="aura-pill">AURA DESIGN SYSTEM v1.0</div>
                    <h1>Convert Markdown to <br><span class="aura-gradient">Professional Documents</span></h1>
                    <p>Experience the fusion of Midnight Obsidian tones and Glass Architecture. A high-performance tool built with the JohnLC Development Framework.</p>
                </div>
            </section>

            <section class="converter-container">
                <div class="aura-glass-card">
                    <div class="card-header">
                        <div class="header-left">
                            <span class="status-indicator"></span>
                            <span class="status-text">Ready for Production</span>
                        </div>
                        <div class="header-right">
                            <label for="fileUpload" class="btn-aura-secondary">
                                <span>📂 Import .md</span>
                            </label>
                            <input type="file" id="fileUpload" accept=".md" style="display:none;">
                            <button id="downloadBtn" class="btn-aura-primary">
                                <span>📥 Export .docx</span>
                            </button>
                        </div>
                    </div>

                    <div class="aura-workspace">
                        <div class="workspace-pane editor-pane">
                            <div class="pane-title">Source Editor</div>
                            <textarea id="markdownInput" placeholder="Enter your markdown here..."></textarea>
                        </div>
                        <div class="workspace-pane preview-pane">
                            <div class="pane-title">Aura Preview</div>
                            <div id="preview" class="preview-content"></div>
                        </div>
                    </div>

                    <form id="convertForm" action="convert.php" method="POST" style="display:none;">
                        <input type="hidden" name="markdown_content" id="hiddenMarkdownInput">
                    </form>
                </div>
            </section>

            <section class="aura-features">
                <div class="feature-title">
                    <h2>AURA CORE Principles</h2>
                    <p>Built for completeness, performance, and accessibility.</p>
                </div>
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="f-badge">01</div>
                        <h3>Production Ready</h3>
                        <p>Zero placeholders. Every feature fully implemented for immediate deployment.</p>
                    </div>
                    <div class="feature-item">
                        <div class="f-badge">02</div>
                        <h3>Highly Performant</h3>
                        <p>GPU accelerated rendering and optimized PHP backend for instant conversion.</p>
                    </div>
                    <div class="feature-item">
                        <div class="f-badge">03</div>
                        <h3>Secure by Default</h3>
                        <p>Built-in XSS and input validation to protect your documentation.</p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="aura-footer">
            <p>Built with 💙 by JohnLC Aura Design System. Midnight Obsidian Edition.</p>
        </footer>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>