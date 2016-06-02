TP-Link TD-W8970 v1
====================
The TD-W8970 v1 is a 450Mbps Wireless N Gigabit ADSL2+ / VDSL2 Modem Router, wrongly advertised as a 300Mbps and ADSL2+ only product.
> The overriding design goal for Markdown's
> formatting syntax is to make it as readable
> as possible. The idea is that a
> Markdown-formatted document should be
> publishable as-is, as plain text, without
> looking like it's been marked up with tags
> or formatting instructions.
Installation
---------------------
At the time of writing, the only known method of installation involves access to the bootloader, which requires using the serial console. This in turn requires opening the device to access the contacts on the circuit board.

Once a serial console has been established (see below for further details) the following method:
1. Download the openwrt-lantiq-xrx200-TDW8970-uImage-initramfs image from wherever you can find it (the official release does not supply a uImage with an initramfs, so booting that just gives you an error about a missing root filesystem.)
    
2. Switch on the device and press 't' on the serial console until you get a prompt, then run commands similar to these:
    - Set the device's IP if you don't want the default 192.168.1.1: (so you don't have to move your TFTP server onto a different subnet)

        setenv ipaddr 192.168.1.1

    - Set the address of your TFTP server:
        ```sh
        setenv serverip 192.168.1.2
        ```
    - Set the board type:
        ```sh
        setenv bootargs 'board=WD8970'
        ```
    - Download the image into RAM (*not* flash):
        ```sh
        tftpboot openwrt-lantiq-xrx200-TDW8970-uImage-initramfs
        ```
    - Boot the image from RAM:
        ```sh
        bootm
        ```
3. If OpenWRT boots successfully, download the official release sysimage into /tmp
    Flash the newly downloaded sysimage:
    ```sh
    sysupgrade /tmp/openwrt-lantiq-xrx200-TDW8970-sysupgrade.image
    ```
Configuration
---------------------
Hardware
---------------------
### Table of hardware
### Serial
The serial port is in the processor, the pin number one is marked.
#### Speed:
| Speed  | Bit | Parity | Stop |
|--------|-----|--------|------|
| 115200 | 8   | N      | 1    |
#### Pinout:
| Function | Pin |
|----------|-----|
| VCC 3.3V | 1   |
| GND      | 2   |
| RX       | 3   |
| TX       | 4   |
### JTAG
The JTAG is located near the flash, the pinout is written in the silkscreen of the PCB.
### Photos
#### PCB
![PCB Front](https://wiki.openwrt.org/_media/media/tplink/td-w8970/td-w8970_hardware_labeled.png "PCB Front")
#### Serial & JTAG
![PCB Front](https://wiki.openwrt.org/_media/media/tplink/td-w8970/td-w8970_serial-jtag.jpg "PCB Front")
### Modifications
Debrick
---------------------
Logs
---------------------