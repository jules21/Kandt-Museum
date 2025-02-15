Ladda.bind('input[type=submit]', { timeout: 1000 });

// Bind normal buttons
Ladda.bind('.ladda-button', { timeout: 1000 });

// Bind progress buttons and simulate loading progress
Ladda.bind('.ladda-button', {
	callback: function(instance) {
		var progress = 0;
		var interval = setInterval(function() {
			progress = Math.min(progress + Math.random() * 0.1, 1);
			instance.setProgress(progress);

			if (progress === 1) {
				instance.stop();
				clearInterval(interval);
			}
		}, 200);
	}
});
