<pre class="terminal relative overflow-y-clip transition-all bg-slate-900 text-mono w-full sm:w-[80ch] max-w-full rounded-xl shadow-2xl px-8 py-8 mx-auto text-left text-lg overflow-x-auto h-full" x-data="terminal({textToUse: {{ $text }}})" x-intersect.once="startTyping()"><span x-html="typedText"></span><span class="caret">|</span></pre>

@pushOnce('scripts')
    <script>
        const installText = [
            '# # Install cpx with <a href="https://getcomposer.org/" target="_blank" class="text-slate-400 hover:text-slate-300">Composer</a>',
            '# ',
            'composer global require cpx/cpx',
            '# ',
            '# Changed current directory to ~/.composer',
            '# ./composer.json has been updated',
            ' ',
            '# Package operations: 1 install, 0 updates, 0 removals',
            '#   - Installing cpx/cpx: Extracting archive',
            '# ',
            '# ',
        ];
        const laravelInstallerText = [
            'cpx laravel/installer new',
            ' ',
            '# # Alternatively, for popular community packages,',
            '# # you can use the command\'s alias directly',
            ' ',
            'cpx laravel new',
            '# ',
            '# # Running bin/laravel from laravel/installer',
            '# ',
            '#  _                               _',
            '# | |                             | |',
            '# | |     __ _ _ __ __ ___   _____| |',
            '# | |    / _` | \'__/ _` \\ \\ / / _ \\ |',
            '# | |___| (_| | | | (_| |\\ V /  __/ |',
            '# |______\\__,_|_|  \\__,_| \\_/ \\___|_|',
            '# ',
            ' ',
            '# ┌ What is the name of your project? ───────────────────────────┐',
            '# │ E.g. example-app                                             │',
            '# └──────────────────────────────────────────────────────────────┘',
            '# ',
        ];
        const cpxTestText = [
            'cpx test',
            '# ',
            '# # Detected PHPUnit as project\'s test framework',
            '# ',
            ' ',
            '# <span class="bg-green-500 px-2 py-1">PASS</span>  Tests\\Unit\\ExampleTest',
            '# <span class="text-green-500">✓</span> that true is true',
            '# ',
            ' ',
            '# <span class="bg-green-500 px-2 py-1">PASS</span>  Tests\\Feature\\CpxIsUsefulTest',
            '# <span class="text-green-500">✓</span> cpx has proven to be useful',
            '# ',
            ' ',
            '# Tests:    2 passed (2 assertions)',
            '# Duration: 0.6s',
            '# ',
        ];
        const psalmResultText = [
            '# Scanning files...',
            ' ',
            '# Analyzing files...',
            ' ',
            '# ',
            '# ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░  50 / 200 (25%)',
            ' ',
            '# ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 100 / 200 (50%)',
            ' ',
            '# ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 150 / 200 (75%)',
            ' ',
            '# ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 200 / 200 (100%)',
            ' ',
            '# ',
            '# ------------------------------',
            '# ',
            '#        No errors found!',
            '# ',
            '# ------------------------------',
            '# ',
            '# Checks took 6 seconds and used 2GB of memory',
            '# Psalm was able to infer types for 100% of the codebase',
            '# ',
        ];
        const cpxCheckText = [
            'cpx check',
            ' ',
            '# # Detected Psalm as project\'s static analysis tool',
            '',
            '# ',
            ...psalmResultText,
        ];
        const psalmRunText = [
            'cpx vimeo/psalm psalm',
            ' ',
            '# # Alternatively, if there is only 1 command or',
            '# # the command name is the same as the package',
            '# # you can omit the command name altogether',
            ' ',
            'cpx vimeo/psalm',
            ' ',
            '# # Alternatively, for popular community packages,',
            '# # you can use the command\'s alias directly',
            ' ',
            'cpx psalm',
            '# ',
            ...psalmResultText,
        ];
        const phpcsFixerText = [
            '# PHP CS Fixer 3 by Fabien Potencier, Dariusz Ruminski and contributors.',
            '# Loaded config from ".php-cs-fixer.php".',
            ' ',
            '#  4096/4096 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%',
            ' ',
            '# ',
            '#    1) src/BadlyFormattedFile.php',
            '#    2) src/File/With/Ugly/Code.php',
            '# ',
            '# Fixed 2 of 4096 files in 6 seconds, 36.00 MB memory used',
            '# ',
        ];
        const cpxFormatText = [
            'cpx format',
            ' ',
            '# # Detected PHP-CS-Fixer as project\'s code formatting tool',
            ' ',
            '# ',
            ...phpcsFixerText
        ];
        const phpCsFixerRunText = [
            'cpx friendsofphp/php-cs-fixer php-cs-fixer fix',
            ' ',
            '# # Alternatively, if there is only 1 command or',
            '# # the command name is the same as the package',
            '# # you can omit the command name altogether',
            ' ',
            'cpx friendsofphp/php-cs-fixer fix',
            ' ',
            '# # Alternatively, for popular community packages,',
            '# # you can use the command\'s alias directly',
            ' ',
            'cpx php-cs-fixer fix',
            '# ',
            ...phpcsFixerText
        ];
        const cpxHelpText = [
            'cpx help',
            ' ',
            '# # To see more commands',
            ' ',
        ];
        const examples = [
            [...laravelInstallerText, ' ', ...cpxTestText],
            [...laravelInstallerText, ' ', ...cpxCheckText],
            [...laravelInstallerText, ' ', ...cpxFormatText],
            [...phpCsFixerRunText, ' ', ...cpxTestText],
            [...phpCsFixerRunText, ' ', ...cpxCheckText],
            [...psalmRunText, ' ', ...cpxTestText],
            [...psalmRunText, ' ', ...cpxFormatText],
        ];

        const composerCommandExamples = [laravelInstallerText, phpCsFixerRunText, psalmRunText];
        const randomComposerCommandText = composerCommandExamples[Math.floor(Math.random() * composerCommandExamples.length)];

        const normalizeCommandExamples = [cpxTestText, cpxCheckText, cpxFormatText];
        const randomNormalizeCommandText = normalizeCommandExamples[Math.floor(Math.random() * normalizeCommandExamples.length)];

        function terminal({ textToUse }) {
            return {
                commandText: textToUse || [],
                typedText: '',
                currentLine: 0,
                currentIndex: 0,
                delay: 100,
                newLineDelay: 1000,
                commentPrefix: '# ',
                isTyping: false,
                startTyping() {
                    if (!this.isTyping) {
                        this.isTyping = true;
                        this.typeCommand();
                    }
                },
                typeCommand() {
                    const typing = () => {
                        if (this.commandText[this.currentLine] === '') {
                            setTimeout(typing, this.newLineDelay);
                            this.currentLine++;
                            return;
                        }
                        if (this.currentIndex === 0 && this.commandText[this.currentLine] && this.commandText[this.currentLine].startsWith(this.commentPrefix)) {
                            const text = this.commandText[this.currentLine].slice(this.commentPrefix.length);
                            this.typedText += `<span class="text-slate-500">${text}</span>`;
                            this.typedText += '<br>';
                            this.currentLine++;
                            typing();
                            return;
                        }
                        if (this.currentIndex < this.commandText[this.currentLine].length) {
                            this.typedText += this.commandText[this.currentLine][this.currentIndex];
                            this.currentIndex++;
                            if (this.currentIndex === this.commandText[this.currentLine].length && this.commandText[this.currentLine + 1]) {
                                this.currentLine++;
                                this.currentIndex = 0;
                                this.typedText += '<br>';
                                setTimeout(typing, this.newLineDelay);
                                return;
                            }
                            setTimeout(typing, this.delay);
                        }
                    };
                    typing();
                }
            };
        }
    </script>
@endpushOnce
