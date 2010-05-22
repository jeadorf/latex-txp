.PHONY: info
info:
	@php -f src/plugin_util.php info

.PHONY: plugin
plugin:
	@php -f src/plugin_util.php base64

.PHONY: plugin-sql
plugin-sql:
	@php -f src/plugin_util.php sql

