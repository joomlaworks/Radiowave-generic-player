# Generic Player for the Radiowave template
An audio player module for integrating third-party streaming servers with RadioWave.

All you need to do is enter your stream's URL in the module parameters and choose the template you want to use.

### Setup
The player works with IceCast and ShoutCast servers that serve MP3 or M4A (AAC) audio. On ShoutCast servers, you may need to add ``;stream/1`` to the URL to access the audio live-stream, for example: ``http://domain.com/;stream/1``

Then select the player's template to use.

For the inline player, simply select the 'Default' template. For the player in the popup select the 'Popup' template.

### Templates
The module offers two sub-templates, one for the inline player and one for the popup player.

### Module Class Suffix
Use ``left`` to pull the module to the left, or ``right`` to pull it to the right, within the module parameters.

### Installation
Download the module and install it like any other Joomla extension.

### MVC Templating
The module relies on the RadioWave template for styling, which makes it truly 'plug and play' for your RadioWave powered website.

If you want more control, you can simply override the generated HTML and CSS using MVC template overrides within your Joomla template. Hover over each parameter in the module settings for additional info.

### Requirements
- Joomla 3.x
- The RadioWave Template by JoomlaWorks

### Release
The latest version 1.1 was released on July 1st, 2019.
