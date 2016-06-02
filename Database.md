# LEDE Hub
## Database Structure
The idea is to keep less information in the database, but at the same time it has to save anything that the hub contains.
### Reports
The reports do not need a real database, they will be managed by a parallel system. The hub is just a UI for the backend.
### Platforms and devices
We differentiate the **platform** from a **device** using a flag (contains the id of the hardware that works as platform) on the database. Both are called "**hardware**".
The information that we need is the **name**, the **short name** for the rewrite of url (**slug**), the **manufacturer**, and a **brief description** to be placed under the title to direct the user.
Beyond that is available the body (**content**) of the page.

Each "hardware" has characteristics or categories. To cover this functionality and to perform research there are tags; examples:
 - The **TD-W8970** could have the following tags: `ROUTER MODEM xDSL ADSL VDSL SWITCH USB WIFI`
 - The **TL-WR703N** could have the following tags: `ROUTER WIFI USB ETHERNET`
 - The **AR9331** could have the following tags: `MIPS SOC WiSOC SWITCH WIFI USB`
 - The **VRX200** could have the following tags: `MIPS SOC MODEM USB SWITCH PCI PCIe xDSL`
### Staff
Staff members are characterized by the **nickname**, the **name** (optional), **email** (optional) and the **roles** they have in the project and the related **hardware**.
### Release and hardware compability.
Each **major release** is inserted in the database, through analysis of reports we can insert your **compatibility rating** for each release.
### Other stuff
In the database I added the log magnitude and photos; how to say the name, allow you to save logs and images, these could be incorporated into the body of the pages.
### TODO
I have not provided a way to save the list of the features that a hardware has.

 - Some platform characteristics are: **WiFi**, **xDSL**, **IIC**, **SPI**, **USB**, **PCIe bus**, **HW Encryption**, **VoIP**, ecc.
 - Some device characteristics are its hardware: **SoC**, **RAM**, **ROM**, **WiFi**, **Switch**, ecc.
