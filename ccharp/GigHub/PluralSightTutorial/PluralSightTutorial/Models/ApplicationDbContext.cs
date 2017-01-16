﻿using Microsoft.AspNet.Identity.EntityFramework;
using System.Data.Entity;

namespace PluralSightTutorial.Models
{

    public class ApplicationDbContext : IdentityDbContext<ApplicationUser>
    {
        public DbSet<Gig> Gigs { get; set; }
        public DbSet<Genre> Genres { get; set; }
        public DbSet<Attendance> Attendances { get; set; }
        public DbSet<Following> Followings { get; set; }

        public ApplicationDbContext()
            : base("DefaultConnection", throwIfV1Schema: false)
        {
        }

        public static ApplicationDbContext Create()
        {
            return new ApplicationDbContext();
        }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Attendance>()
                .HasRequired(a => a.Gig)
                .WithMany()
                .WillCascadeOnDelete(false);

            // That application user has many followers and each follower needs a followee
            modelBuilder.Entity<ApplicationUser>()
                            .HasMany(u => u.Followers)
                            .WithRequired(f => f.Followee)
                            .WillCascadeOnDelete(false);
            // That application user has many followees and each followee needs a follower
            modelBuilder.Entity<ApplicationUser>()
                            .HasMany(u => u.Followees)
                            .WithRequired(f => f.Follower)
                            .WillCascadeOnDelete(false);

            base.OnModelCreating(modelBuilder);

        }
    }
}