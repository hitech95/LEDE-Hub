# LEDE Hub
A quick way to search and browse all the available platforms.

### Features:
  - Browse the supported hardware
  - Direct link for bugs (bugtracker)
  - Cronjob to import the devices to keep in synk the hub with the build server
  - Browse developers and tester working on the LEDE project
  - Browse test results
  - Browse main releases
  - Track changes on the platform
 
### Todo's
  - Design the platform users permissions
  - Design the DB structure
  - Design a simple way to document the hardware maybe a Markdown or a WYSIWYG editor
  - Define a theme for the UI
  - Make all the code :)
  - Something else?

### Random stuff
 - Possible CSV input format: "lantiq|xrx200|TD8970|TP-Link TD-8970"
 - Page structure:
   - / (index)
   - /login
   - /logout
   - /device (device list)
   - /device/[manufacturer]/[shortname] (Device page)
   - /staff (staff list)
   - /staff/[staff-mail] (Staff detail page)
   - /report/ (Reports info. List of last # reports)
   - /report/[id] (Report detail page)
   - /report/[release]/ (Report list for the specified release)
   - /report/hardware/[shortname] (Report list for the hardware)
   - /report/hardware/[shortname]/[release] (Report list list for the hardware and the release)
   - /release (release list)
   - /release/[version]

### Contribute
  - Send your PR
  - If you find a bug open an Issue
  - Share your ideas.

### License
  - GPL v3
