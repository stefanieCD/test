from tkinter import messagebox
from PyQt5 import QtWidgets,QtCore
import sys
import tkinter as tk
class TCPServerGUI:
    def __init__(self, root):
        self.root = root
        self.root.title("TCP Server")

        self.messages = []
        self.files = []

        self.message_frame = tk.Frame(self.root)
        self.message_frame.pack(fill=tk.BOTH, expand=True)

        self.message_listbox = tk.Listbox(self.message_frame, width=50)
        self.message_listbox.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)

        self.scrollbar = tk.Scrollbar(self.message_frame, orient=tk.VERTICAL)
        self.scrollbar.config(command=self.message_listbox.yview)
        self.scrollbar.pack(side=tk.RIGHT, fill=tk.Y)
        self.message_listbox.config(yscrollcommand=self.scrollbar.set)

        self.file_frame = tk.Frame(self.root)
        self.file_frame.pack(fill=tk.BOTH, expand=True)

        self.file_listbox = tk.Listbox(self.file_frame, width=50)
        self.file_listbox.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)

        self.scrollbar2 = tk.Scrollbar(self.file_frame, orient=tk.VERTICAL)
        self.scrollbar2.config(command=self.file_listbox.yview)
        self.scrollbar2.pack(side=tk.RIGHT, fill=tk.Y)
        self.file_listbox.config(yscrollcommand=self.scrollbar2.set)

    def add_message(self, message):
        self.messages.append(message)
        self.message_listbox.insert(tk.END, message)

    def add_file(self, filename):
        self.files.append(filename)
        self.file_listbox.insert(tk.END, filename)


if __name__ == "__main__":
    app = QtWidgets.QApplication(sys.argv)
    widget = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(widget)
    widget.show()
    sys.exit(app.exec_())
