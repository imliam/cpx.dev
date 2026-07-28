<pre class="terminal relative overflow-y-clip transition-all bg-ink-950 ring-1 ring-inset ring-ink-700 text-mono w-full sm:w-[80ch] max-w-full rounded-xl shadow-2xl px-8 py-8 mx-auto text-left text-lg overflow-x-auto h-full" x-data="terminal({textToUse: {{ $text }}})" x-intersect.once="startTyping()"><span x-html="typedText"></span><span class="caret">|</span></pre>

@pushOnce('scripts')
    <script>
        const installText = [
            '# # Install cpx with <a href="https://getcomposer.org/" target="_blank" class="text-ink-400 hover:text-ink-300">Composer</a>',
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
        const aliasText = [
            '# # Tired of typing a package\'s full name?',
            '# # Alias it.',
            ' ',
            'cpx alias laravel/installer laravel',
            '# ',
            '# <span class="text-orange-500">✓</span> Aliased laravel/installer as laravel',
            '# ',
            ' ',
            'cpx laravel new my-app',
            '# ',
            '# # Running bin/laravel from laravel/installer',
            '# ',
            ' ',
            '# # See the aliases you\'ve made with cpx aliases,',
            '# # and remove one with cpx unalias laravel',
            '# ',
        ];
        const phpstanResultText = [
            '# Note: Using configuration file phpstan.neon.dist.',
            ' ',
            '#  200/200 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%',
            ' ',
            '# ',
            '# <span class="bg-green-600 px-2 py-1">OK</span> No errors',
            '# ',
        ];
        const localBinText = [
            '# # Inside a project that already installs a tool,',
            '# # cpx runs the version your project pins',
            ' ',
            'cpx phpstan analyse',
            '# ',
            '# # Running vendor/bin/phpstan from this project',
            '# ',
            ...phpstanResultText,
            ' ',
            '# # Want the isolated copy instead? Skip the local one.',
            ' ',
            'cpx --skip-local phpstan/phpstan analyse',
            '# ',
        ];
        const phpstanRunText = [
            'cpx phpstan/phpstan phpstan analyse',
            ' ',
            '# # If there is only 1 command, or the command name',
            '# # is the same as the package, you can omit it',
            ' ',
            'cpx phpstan/phpstan analyse',
            '# ',
            ...phpstanResultText,
        ];
        const phpCsFixerRunText = [
            'cpx friendsofphp/php-cs-fixer php-cs-fixer fix',
            ' ',
            '# # If there is only 1 command, or the command name',
            '# # is the same as the package, you can omit it',
            ' ',
            'cpx friendsofphp/php-cs-fixer fix',
            '# ',
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
        const versionedRunText = [
            '# # Need a specific version? Constrain it like Composer would.',
            ' ',
            'cpx friendsofphp/php-cs-fixer:^3.0 fix ./src',
            '# ',
            '# # Installing friendsofphp/php-cs-fixer (v3.64.0)',
            '# ',
        ];
        const examples = [
            [...laravelInstallerText, ' ', ...aliasText],
            [...phpCsFixerRunText, ' ', ...versionedRunText],
            [...phpstanRunText, ' ', ...localBinText],
        ];

        const composerCommandExamples = [laravelInstallerText, phpCsFixerRunText, phpstanRunText];
        const randomComposerCommandText = composerCommandExamples[Math.floor(Math.random() * composerCommandExamples.length)];

        const projectAwareExamples = [localBinText, aliasText];
        const randomProjectAwareText = projectAwareExamples[Math.floor(Math.random() * projectAwareExamples.length)];

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
                            this.typedText += `<span class="text-ink-500">${text}</span>`;
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
