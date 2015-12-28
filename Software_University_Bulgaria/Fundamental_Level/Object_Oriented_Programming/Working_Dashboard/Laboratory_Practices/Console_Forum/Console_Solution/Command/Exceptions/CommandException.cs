﻿namespace ConsoleForum.Command
{
    using System;
    using System.Runtime.Serialization;

    public class CommandException : Exception, ISerializable
    {
        public CommandException(string message) 
            : base(message)
        { 
        }
    }
}
