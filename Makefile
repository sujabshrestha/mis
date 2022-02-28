gitpush:
	git add .
	git commit -m "changes"
	git push
clear:
	php artisan optimize:clear
