# LEDE Hub
A quick way to search and browse all the available platforms and our awesome staff!

## Features:
  - Browse the supported hardware
  - Direct link for bugs (bugtracker)
  - Cronjob to import the devices to keep in synk the hub with the build server
  - Browse developers and tester working on the LEDE project
  - Browse test results
  - Browse main releases
  - Track changes on the platform
 
## Todo's
  - Design the platform users permissions
  - Design the DB structure
   ![DB Structure](https://raw.githubusercontent.com/hitech95/LEDE-Hub/master/DB%20Layout.png "DB Structure") 
  - Design a simple way to document the hardware maybe Markdown or WYSIWYG or asciidoctor. And then parese it on client side.
  - Define a theme for the UI
  - Define a way to calculate the status using reports
  - Make all the code :)
  - Something else? Oh, yes: compile LEDE!

 ### Page structure:
   - `/` index
   - `/login`
   - `/logout`
   - `/device` device list
   - `/device/[manufacturer]/[shortname]` Show the device page
   - `/staff` Staff list
   - `/staff/[staff-mail]` Staff detail page
   - `/report/` Reports info. List of last # reports
   - `/report/[id]` Report detail page
   - `/report/[release]/` Report list for the specified release
   - `/report/hardware/[shortname]` Report list for the hardware
   - `/report/hardware/[shortname]/[release]` Report list list for the hardware and the release
   - `/release` Releases list
   - `/release/[version]` Details of a release like # of commit from last release

## Random stuff
 - Possible CSV input format: "lantiq|xrx200|TD8970|TP-Link TD-8970"

### Contribute
  - Send your PR
  - If you find a bug open an Issue
  - Share your ideas.

### License
  - GPL v3