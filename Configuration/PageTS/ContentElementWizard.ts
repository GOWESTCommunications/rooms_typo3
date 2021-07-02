mod.wizards {
    newContentElement.wizardItems {
        plugins {
            elements {
                rooms_pi1 {
                    title = Rooms (& Packages)
                    description = bindet Zimmer, Packages und Anwendungen aus Kognitiv ein
                    tt_content_defValues {
                        CType = list
                        list_type = rooms_pi1
                    }
                }
            }
            show := addToList(rooms_pi1)
        }
    }
}