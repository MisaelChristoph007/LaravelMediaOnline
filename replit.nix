{ pkgs }: {
	deps = [
   pkgs.unixtools.ping
		pkgs.php80
        pkgs.php80Packages.composer
	];
}