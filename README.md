# Generic Player for the Radiowave template
Not using Radiojar? No Problem!
A player used for porting Radiowave to other services. All you need to do is to enter your strem's URL and choose the template for the module you want to use.

### Setting up
Please note that the stream should serve mp3s.
The player also works with Icecast and ShoutCast servers that serve MP3 or M4A (AAC) audio. On ShoutCast servers, you may need to add ``;stream/1`` to the URL to access the audio live-stream
For example, ``http://domain.com/;stream/1``
Then select the player's template you need to use.
For the inline player, simply select the Default template. For the player in the popup select the 'Popup' template.

### Templates
The modules offer the two sub-templates that the template comes bundled with.
One for the inline player and one for the Popup player.

### Module Suffixes
Use ``left`` to pull the module to the left, or ``right`` to pull it to the right."

### Installation

Download the module and install it like any other Joomla! extension.

### MVC TEMPLATING
The module relies on the Radiowave template for styling, which makes it truly 'plug and play' for your Radiowave powered website. If you want more control, you can simply override both the generated HTML and CSS, using MVC template overrides within your Joomla template. Hover over each parameter in the module settings for additional info.

### REQUIREMENTS
- Joomla 3.x
- The Radiowave Template

