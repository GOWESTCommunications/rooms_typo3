mod.wizards {
    newContentElement.wizardItems {
        plugins {
            elements {
                roomstypo3_pi1 {
                    title = Rooms (& Packages)
                    description = bindet Zimmer, Packages und Anwendungen aus Kognitiv ein
                    tt_content_defValues {
                        CType = list
                        list_type = roomstypo3_pi1
                    }
                }
            }
            show := addToList(roomstypo3_pi1)
        }
    }
}